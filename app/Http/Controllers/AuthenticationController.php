<?php

namespace App\Http\Controllers;

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
                    Rule::unique('users'),
                ],
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            if ($req->phone_number) {

                $userWithPhoneNumber = User::wherePhoneNumber($req->phone_number)->first();

                if ($userWithPhoneNumber && $userWithPhoneNumber->phone_number_verified_at && $userWithPhoneNumber->password) {
                    return back()->with('error', 'Phone number has been taken');
                } elseif ($userWithPhoneNumber && $userWithPhoneNumber->status == 2) {
                    $userWithPhoneNumber->delete();
                }
            }else {

                $userWithEmail = User::whereEmail($req->email)->first();

                if ($userWithEmail && $userWithEmail->email_verified_at && $userWithEmail->password) {
                    return back()->with('error', 'Email has been taken');
                } elseif ($userWithEmail && $userWithEmail->status == 2) {
                    $userWithEmail->delete();
                }
            }

            $data = $req->except('_token');
            User::create($data);

            $this->sendOtp($req);

            return redirect(route('verify-email-phone'))->with(['email' => $req->email ?? '' ,'phone_number' => $req->phone_number ?? '']);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', "Something unexpected happened on server. " . $th->getMessage());
        }
    }

    public function verifyEmailPhoneIndex()
    {
        if (!session('phone_number') && !session('email')) return redirect(route('login'));
        return view('content.auth.verify-code-1',['phone_number' => session('phone_number'),'email' => session('email')]);
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
                return redirect()->back()->with(['email' => $req->email ?? '' ,'phone_number' => $req->phone_number ?? '', 'error' => "Your verification code is not correct"]);
            } else {
                if ($req->phone_number) {
                    $user->update(['phone_number_verified_at' => now(), 'otp' => '','status' => 1]);
                } else {
                    $user->update(['email_verified_at' => now(), 'otp' => '','status' => 1]);
                }

                Auth::login($user);
                return redirect()->route('dashboard')->with('success',"Welcome to Eventopia");
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', "Something unexpected happened on server. " . $th->getMessage());
        }
    }

    // Login Index
    public function loginIndex(Request $req)
    {
        if(Auth::check()) return redirect(route('dashboard'));

        return view('content.auth.login');
    }

    // Login
    public function login(Request $req)
    {
        try {

            if(!Auth::attempt(
                ['email' => $req->email,'password' => $req->password,'status' => 1],
                $req->remember_me == 'on' ? true : false
            )){
                return redirect()->back()->with('error','Email or password is not correct or your account is not active');
            }

            User::find(auth()->id())->update([
                'last_login_device' => 'web',
                'default_password' => null,
            ]);

            return redirect(route('dashboard'));
        } catch (\Throwable $th) {
             return redirect()->back()->with('error', "Something unexpected happened on server. " . $th->getMessage());
        }

    }


    public function sendOtp(Request $req)
    {
        $otp = rand(111111, 999999);

        if ($req->phone_number) {
            User::where('phone_number', $req->phone_number)->update(['otp' => $otp]);
            $this->sendMessage($req->phone_number,$otp);
        }else {
            User::where('email', $req->email)->update(['otp' => $otp]);
            Mail::to($req->email)->send(new EmailVerfication($otp));
        }
    }

    public function sendMessage($phone_number = null ,$otp)
    {
        // dispatch(new SendSms($phone_number,$otp));
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }
}
