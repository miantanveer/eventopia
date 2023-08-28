<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserBaseController;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class DashboardController extends UserBaseController
{
    public function index()
    {
        return view('content.customer.customer-dashboard');
    }

    public function editProfileIndex()
    {
        return view('content.customer.edit-profile');
    }

    public function editProfile(Request $req)
    {
        try {
            $validator = Validator::make($req->all(), [
                'first_name' => 'required',
                'last_name' => 'required',
                'date_of_birth' => 'required',
                'password' => 'required|confirmed',
                'phone_number' => 'required',
                'email' => 'required|email'
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $data = $req->except('_token', 'image');

            $userWithPhoneNumber = User::wherePhoneNumber($req->phone_number)->first();

            if ($userWithPhoneNumber && $userWithPhoneNumber->phone_number_verified_at && $userWithPhoneNumber->password) {
                return redirect()->back()->with('error', 'Phone number has been taken');
            } elseif ($userWithPhoneNumber && $userWithPhoneNumber->status == 2) {
                $userWithPhoneNumber->delete();
            }

            $userWithEmail = User::whereEmail($req->email)->first();

            if ($userWithEmail && $userWithEmail->email_verified_at && $userWithEmail->password) {
                return  redirect()->back()->with('error', 'Email has been taken');
            } elseif ($userWithEmail && $userWithEmail->status == 2) {
                $userWithEmail->delete();
            }

            if ($req->hasFile('image')) {
                $image = $req->file('image');
                $foldername = '/uploads/customer/profile_pic/';
                $filename = time() . '-' . rand(00000, 99999) . '.' . $image->extension();
                $image->move(public_path() . $foldername, $filename);
                User::find(auth()->user()->id)->update(['image' => $foldername . $filename]);
            }

            User::find(auth()->user()->id)->update($data);

            return back()->with('success', 'Profile updated successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something unexpected happened on server. ' . $th->getMessage());
        }
    }
}
