<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\EmailVerfication;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends AdminBaseController
{
    // Login Index
    public function adminLoginIndex()
    {
        if (Auth::check()) return redirect(route('admin.dashboard.index'));

        return view('content.admin.auth.login');
    }

    // Login
    public function adminLogin(Request $req)
    {
        try {
            $validator = Validator::make($req->all(), [
                'email' => 'required',
                'password' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $user = User::whereEmail($req->email)->first();
            if (!$user) {
                return redirect()->back()->with('error', 'Email does not exist. ');
            }
            $match = Auth::attempt(['email' => $req->email, 'password' => $req->password, 'status' => 1]);// 'is_admin' => '1',

            if ($user->status != 1) {
                return redirect()->back()->with('error', 'Your account is not active. ');
            }
            if ($user->is_admin != 1) {
                return redirect()->back()->with('error', 'Its not an admin account. ');
            }

            if (!$match) {
                return redirect()->back()->with('error', 'Your Password is Incorrect.');
            }
            if ($match) {
                $des = 'Logged in successfully';
                notification('Logged in', $des, auth()->user()->id);
            }
            return redirect(route('admin.dashboard.index'))->with('success', 'Login Successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something unexpected happened on server. ' . $th->getMessage());
        }
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect(route('admin.login'));
    }

    public function forgetPasswordIndex()
    {
        return view('content.admin.auth.forget-password');
    }

    public function forgetPassword(Request $req)
    {
        try {
            $user = User::whereEmail($req->email)->whereIsAdmin('1')->first();
            if (!$user) {
                return redirect()->back()->with('error', 'Email does not exist. ');
            }

            $this->email = $req->email;
            $this->sendOtp($req);

            return view('content.admin.auth.verify-code-1', $this->data);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something unexpected happened on server. ' . $th->getMessage());
        }
    }

    public function verifyCode(Request $req)
    {
        try {
            $data = $req->except('_token');
            $otp = '';
            foreach ($data['otp'] as $key => $value) {
                $otp .= $value;
            };

            $user = User::whereEmail($req->email)->whereIsAdmin('1')->first();

            if ($otp != $user->otp) {
                return redirect()->back()->with(['email' => $req->email , 'error' => 'Your verification code is not correct']);
            } else {

                $user->update(['email_verified_at' => now(), 'otp' => '', 'status' => 1]);

                return redirect()->route('admin.reset.password')->with(['email' => $req->email, 'success', 'Otp Matched Successfully.']);
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something unexpected happened on server. ' . $th->getMessage());
        }
    }

    public function resetPasswordIndex()
    {
        if (!session('email')) return redirect(route('login'));
        $this->email = session('email');
        return view('content.admin.auth.reset-password', $this->data);
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

            $user = User::whereEmail($req->email)->whereIsAdmin('1')->first();
            if (!$user) {
                return redirect()->back()->with('error', 'Email does not exist. ');
            }

            $user->update(['password' => $req->password]);

            return redirect()->route('admin.login')->with('success', "Password reset successfully");
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something unexpected happened on server. ' . $th->getMessage());
        }
    }

    public function sendOtp(Request $req)
    {
        try {
            // $otp = rand( 111111, 999999 );
            $otp = 000000;

            User::where('email', $req->email)->update(['otp' => $otp]);
            Mail::to($req->email)->send(new EmailVerfication($otp));
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
