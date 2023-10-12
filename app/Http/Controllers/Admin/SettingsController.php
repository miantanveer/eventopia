<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class SettingsController extends AdminBaseController
{
    public function profileIndex()
    {
        return view('content.admin.settings.profile');
    }

    public function editProfile(Request $req)
    {
        try {
            $validator = Validator::make($req->all(), [
                'first_name' => 'required',
                'last_name' => 'required',
                'date_of_birth' => 'required',
                'phone_number' => [
                    Rule::requiredIf(auth()->user()->phone_number == null),
                    'regex:/^\+[0-9]{6,15}$/',
                ],
                'email' => [
                    Rule::requiredIf(auth()->user()->email == null),
                    'email',
                ],
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

            if ($req->hasFile('image')) {
                $image = $req->file('image');
                $foldername = 'uploads/admin/profile_pic/';
                $filename = time() . '-' . rand(00000, 99999) . '.' . $image->extension();
                Storage::disk("s3")->putFileAs($foldername, $image, $filename);
                User::find(user_id())->update(['image' => $foldername . $filename]);
            }

            User::find(user_id())->update($data);

            return back()->with('success', 'Profile updated successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something unexpected happened on server. ' . $th->getMessage());
        }
    }
}
