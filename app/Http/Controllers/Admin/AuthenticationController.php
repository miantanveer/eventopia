<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends AdminBaseController
{
    // Login Index
    public function adminLoginIndex()
    {
        if (Auth::check()) return redirect(route('admin.dashboard.index'));

        return view('content.admin.auth.login', $this->data);
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
            $match = Auth::attempt(['email' => $req->email, 'password' => $req->password, 'is_admin' => '1', 'status' => 1]);

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
}
