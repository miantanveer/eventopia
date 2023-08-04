<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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
            $otp = rand(111111, 999999);
            $data['otp'] = $otp;
            User::create($data);

            // Mail::to($req->email)->send(new EmailVerification('Sir/Madam', $otp));

            return redirect(route('verify-email'))->with('emailOrPhone', $req->email ?? $req->phone_number);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', "Something unexpected happened on server. " . $th->getMessage());
        }
    }

    public function verifyEmailIndex()
    {
        if (!session('emailOrPhone')) return redirect(route('login'));
        $this->emailOrPhone = session('emailOrPhone') ?? '';
        return view('content.auth.verify-code-1', $this->data);
    }

    public function verifyEmail(Request $req)
    {
        try {
            $data = $req->except('_token');
            $otp = '';
            foreach ($data['otp'] as $key => $value) {
                $otp .= $value;
            };
            $user = User::where('email', $req->email)->first();

            if ($otp != $user->otp) {
                return redirect()->back()->with(['email' => $req->email, 'error' => "Your verification code is not correct"]);
            } else {
                $user->email_verified_at = now();
                $otp = rand(111111, 999999);
                $user->otp = $otp;
                $user->save();

                $this->sendSms($user->phone_number, 'This is your 6 digit code ' . $otp);

                return redirect(route('verify-phone-number'))->with(['success' => 'Email has been verified. Now kindly verify phone number', 'phone_number' => $user->phone_number, 'email' => $req->email]);
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', "Something unexpected happened on server. " . $th->getMessage());
        }
    }
}
