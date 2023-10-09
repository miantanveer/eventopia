<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class UsersController extends AdminBaseController
{
    public function usersIndex()
    {
        $this->users = User::whereIsAdmin('0')->get();
        $this->totalUsers = User::whereIsAdmin('0')->count();
        $this->activeUsers = User::whereIsAdmin('0')->whereStatus('1')->count();
        $this->blockedUsers = User::whereIsAdmin('0')->whereStatus('2')->count();
        return view('content.admin.users.index', $this->data);
    }

    public function addUser(Request $req)
    {
        try {
            $validator = Validator::make($req->all(), [
                'first_name' => 'required',
                'last_name' => 'required',
                'date_of_birth' => 'required',
                'status' => 'required',
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

            $verified_type = $req->email ? 'email_' : 'phone_number_';
            $data[$verified_type . 'verified_at'] = now();
            $params = array_filter([
                'name' => $data['first_name'] . ' ' . $data['last_name'],
                'email' => $data['email'] ?? null,
                'phone' => $data['phone_number'] ?? null,
            ]);
            $data['customer_id'] = $this->stripe->customers->create([$params])->id;
            User::create($data);

            return redirect()->back()->with('success', 'New User Added Successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something unexpected happened on server. ' . $th->getMessage());
        }
    }

    public function editUser(Request $req, $id)
    {
        try {
            $validator = Validator::make($req->all(), [
                'first_name' => 'required',
                'last_name' => 'required',
                'date_of_birth' => 'required',
                'status' => 'required',
                'phone_number' => 'required|regex:/^\+[0-9]{6,15}$/',
                'email' => 'required|email',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $data = $req->except('_token');
            $data['email_verified_at'] = $data['phone_number_verified_at'] = now();

           User::find($id)->update($data);

           return redirect()->back()->with('success', 'User Updated Successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something unexpected happened on server. ' . $th->getMessage());
        }
    }

    public function deleteUser($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('success', 'User Deleted Successfully');
    }
}
