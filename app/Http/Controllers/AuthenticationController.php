<?php

namespace App\Http\Controllers;
use App\Http\Controllers\UserBaseController;

use App\Mail\EmailVerfication;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendSms;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Twilio\Rest\Client;

class AuthenticationController extends UserBaseController
{
    public function signupIndex(Request $req)
    {
        return view('content.auth.signup');
    }

    public function signup(Request $req)
    {
        try {
            $validator = Validator::make($req->all(), [
                'first_name' => 'required',
                'last_name' => 'required',
                'date_of_birth' => 'required',
                'password' => 'required|confirmed',
                'phone_number' => [
                    Rule::requiredIf($req->has('phone_number')),
                    'regex:/^\+[0-9]{6,15}$/',
                ],
                'email' => [
                    Rule::requiredIf($req->has('email')),
                    'email',
                ],
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            if ($req->phone_number) {

                $userWithPhoneNumber = User::wherePhoneNumber($req->phone_number)->first();

                if ($userWithPhoneNumber && $userWithPhoneNumber->phone_number_verified_at && $userWithPhoneNumber->password) {
                    return redirect()->back()->with('error', 'Phone number has been taken');
                } elseif ($userWithPhoneNumber && $userWithPhoneNumber->status == 2) {
                    $userWithPhoneNumber->delete();
                }
            } else {

                $userWithEmail = User::whereEmail($req->email)->first();

                if ($userWithEmail && $userWithEmail->email_verified_at && $userWithEmail->password) {
                    return  redirect()->back()->with('error', 'Email has been taken');
                } elseif ($userWithEmail && $userWithEmail->status == 2) {
                    $userWithEmail->delete();
                }
            }

            $data = $req->except('_token');
            $params = array_filter([
                'name' => $data['first_name'].' '.$data['last_name'],
                'email' => $data['email'] ?? null,
                'phone' => $data['phone_number'] ?? null,
            ]);
            $data['customer_id'] = $this->stripe->customers->create([$params])->id;
            User::create($data);

            $this->sendOtp($req);

            return redirect(route('verify-email-phone'))->with(['email' => $req->email ?? '', 'phone_number' => $req->phone_number ?? '']);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something unexpected happened on server. ' . $th->getMessage());
        }
    }

    public function verifyEmailPhoneIndex()
    {
        if (!session('phone_number') && !session('email')) return redirect(route('login'));
        $this->phone_number = session('phone_number');
        $this->email = session('email');
        $this->send_for = 'signup';
        return view('content.auth.verify-code-1', $this->data);
    }

    public function verifyEmailPhone(Request $req)
    {
        try {
            $data = $req->except('_token');
            $otp = '';
            foreach ($data['otp'] as $key => $value) {
                $otp .= $value;
            };

            if ($req->phone_number) {
                $user = User::wherePhoneNumber($req->phone_number)->first();
            } else {
                $user = User::whereEmail($req->email)->first();
            }

            if ($otp != $user->otp) {
                return redirect()->back()->with(['email' => $req->email ?? '', 'phone_number' => $req->phone_number ?? '', 'error' => 'Your verification code is not correct']);
            } else {

                if ($req->phone_number) {
                    $user->update(['phone_number_verified_at' => now(), 'otp' => '', 'status' => 1]);
                } else {
                    $user->update(['email_verified_at' => now(), 'otp' => '', 'status' => 1]);
                }

                if ($req->send_for == 'signup') {

                    Auth::login($user);

                    return redirect()->route('dashboard')->with('success', 'Welcome to Eventopia');
                } else if ($req->send_for == 'forget_password') {
                    return redirect()->route('reset-password')->with(['email' => $req->email ?? '', 'phone_number' => $req->phone_number ?? '', 'success', 'Otp Matched Successfully.']);
                }
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something unexpected happened on server. ' . $th->getMessage());
        }
    }

    // Login Index

    public function loginIndex(Request $req)
    {
        if (Auth::check()) return redirect(route('dashboard'));

        return view('content.auth.login');
    }

    // Login

    public function login(Request $req)
    {
        try {

            $validator = Validator::make($req->all(), [
                'password' => 'required',
                'phone_number' => [
                    Rule::requiredIf($req->has('phone_number')),
                    'regex:/^\+[0-9]{6,15}$/',
                ],
                'email' => [
                    Rule::requiredIf($req->has('email')),
                    'email',
                ],
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            if ($req->phone_number) {
                $user = User::wherePhoneNumber($req->phone_number)->first();
                if (!$user) {
                    return redirect()->back()->with('error', 'Phone Number does not exist. ');
                }
                $match = Auth::attempt(['phone_number' => $req->phone_number, 'password' => $req->password, 'status' => 1]);
            } else {
                $user = User::whereEmail($req->email)->first();
                if (!$user) {
                    return redirect()->back()->with('error', 'Email does not exist. ');
                }
                $match = Auth::attempt(['email' => $req->email, 'password' => $req->password, 'status' => 1]);
            }

            if ($user->status != 1) {
                return redirect()->back()->with('error', 'Your account is not active. ');
            }

            if (!$match) {
                return redirect()->back()->with('error', 'Your Password is Incorrect.');
            }
            if($match){
                $des = 'Logged in successfully';
                notification('Logged in',$des,auth()->user()->id);
            }
            return redirect(route('dashboard'))->with('success', 'Login Successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something unexpected happened on server. ' . $th->getMessage());
        }
    }

    public function forgetEmailPhoneIndex()
    {
        return view('content.auth.forget-password');
    }

    public function forgetPassword(Request $req)
    {
        try {
            if ($req->phone_number) {
                $user = User::wherePhoneNumber($req->phone_number)->first(); 
            } else {
                $user = User::whereEmail($req->email)->first();
            }
            if (!$user) {
                return redirect()->back()->with('error', 'Email does not exist. ');
            }
            $this->phone_number = $req->phone_number ?? '';
            $this->email = $req->email ?? '';
            $this->send_for = 'forget_password';

            $this->sendOtp($req);
            return view('content.auth.verify-code-1', $this->data);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something unexpected happened on server. ' . $th->getMessage());
        }
    }

    public function resetPasswordIndex()
    {
        if (!session('phone_number') && !session('email')) return redirect(route('login'));
        $this->phone_number = session('phone_number');
        $this->email = session('email');
        $this->send_for = 'signup';
        return view('content.auth.reset-password', $this->data);
    }

    public function resetPassword(Request $req)
    {
        try {
            $validator = Validator::make($req->all(), [
                'password' => 'required|confirmed'
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            if ($req->phone_number) {
                $user = User::wherePhoneNumber($req->phone_number)->first();
            } else {
                $user = User::whereEmail($req->email)->first();
            }
            if (!$user) {
                return redirect()->back()->with('error', 'Email does not exist. ');
            }

            $user->update(['password' => $req->password]);
            $des = 'Password reset successfully';
            notification('Password Reset',$des,auth()->user()->id);
            return redirect(route('login'))->with('success', "Password reset successfully");
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something unexpected happened on server. ' . $th->getMessage());
        }
    }

    public function sendOtp(Request $req)
    {
        try {
            // $otp = rand( 111111, 999999 );
            $otp = 000000;

            if ($req->phone_number) {
                User::where('phone_number', $req->phone_number)->update(['otp' => $otp]);
                $this->sendMessage($req->phone_number, $otp);
            } else {
                User::where('email', $req->email)->update(['otp' => $otp]);
                Mail::to($req->email)->send(new EmailVerfication($otp));
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function sendMessage($phone_number = null, $otp)
    {
        // dispatch( new SendSms( $phone_number, $otp ) );
    }

    // Logout

    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }
}
