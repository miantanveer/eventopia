<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\UserBaseController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AuthenticationController extends UserBaseController
{
   
    public function signup(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'firstName' => 'required',
            'lastName' => 'required',
            'dateOfBirth' => 'required',
            'password' => 'required',
            'phoneNumber' => [
                Rule::requiredIf($req->has('phoneNumber')),
                'regex:/^\+[0-9]{6,15}$/',
                Rule::unique('users', 'phone_number'),
            ],
            'email' => [
                Rule::requiredIf($req->has('email')),
                'email',
                Rule::unique('users', 'email'),
            ],
        ]);
        if ($validator->fails()) {
            if($req->phoneNumber){
                return response()->json('Phone number already exists', 400);
            }
            else{
                return response()->json('Email already exists', 400);
            }
        }

        $user = User::where(function($query) use($req){
            $query->when($req->email != null, function ($emailQuery) use($req) {
                return $emailQuery->whereEmail($req->email);
            });
            $query->when($req->phoneNumer != null, function ($emailQuery) use($req) {
                return $emailQuery->wherePhoneNumber($req->phoneNumber);
            });
        })->whereStatus(2)->first();

        if($user) $user->delete();

        $data = $req->except('_token');
        $params = array_filter([
            'name' => $data['firstName'] . ' ' . $data['lastName'],
            'email' => $data['email'] ?? null,
            'phone' => $data['phoneNumber'] ?? null,
        ]);
        User::create([
            'first_name' => $req->firstName,
            'last_name' => $req->lastName,
            'email' => $req->email,
            'phone_number' => $req->phoneNumber,
            'date_of_birth' => $req->dateOfBirth,
            'password' => $req->password,
            'customer_id' => $this->stripe->customers->create([$params])->id,
        ]
        );

        sendOtpApi($req);

        $res = ['email' => $req->email ?? '', 'phoneNumber' => $req->phoneNumber ?? ''];
        return response()->json($res, 200);
    }

    public function verifyOtp(Request $req)
    {
        $data = $req->except('_token');
        $otp = $req->otp;
        // foreach ($data['otp'] as $key => $value) {
        //     $otp .= $value;
        // };

        if ($req->phoneNumber) {
            $user = User::wherePhoneNumber($req->phoneNumber)->first();
        } else {
            $user = User::whereEmail($req->email)->first();
        }
        if ($otp == $user->otp) {
            if ($req->phoneNumber) {
                $user->update(['phoneNumber_verified_at' => now(), 'otp' => '', 'status' => 1]);
            } else {
                $user->update(['email_verified_at' => now(), 'otp' => '', 'status' => 1]);
            }

            if ($req->sendFor == 'signup') {

                Auth::login($user);

                return response()->json(['token'=>$user->createToken($req->email)->plainTextToken,'email' => $req->email ?? '', 'phoneNumber' => $req->phoneNumber ?? '', 'success', 'Otp Matched Successfully.'], 200);

            } else if ($req->sendFor == 'forget_password') {

                return response()->json(['token'=>$user->createToken($req->email)->plainTextToken,'email' => $req->email ?? '', 'phoneNumber' => $req->phoneNumber ?? '', 'success', 'Otp Matched Successfully.'], 200);
            }
        } else {
            return response()->json(['email' => $req->email ?? '', 'phoneNumber' => $req->phoneNumber ?? '', 'error' => 'Your verification code is not correct'], 400);
        }

    }
    public function forgetPassword(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'phoneNumber' => [
                Rule::requiredIf($req->has('phoneNumber')),
                'regex:/^\+[0-9]{6,15}$/',
            ],
            'email' => [
                Rule::requiredIf($req->has('email')),
                'email',
            ],
        ]);
        if ($validator->fails()) {
            return response()->json('Phone Number or email is required', 400);
        }
        if ($req->phoneNumber) {
            $user = User::wherePhoneNumber($req->phoneNumber)->first();
        } else {
            $user = User::whereEmail($req->email)->first();
        }
        if (!$user) {
            return redirect()->back()->with('error', 'Email does not exist. ');
        }
        $this->phoneNumber = $req->phoneNumber ?? '';
        $this->email = $req->email ?? '';
        $this->sendFor = 'forget_password';

        sendOtpApi($req);
        return response()->json('success', 200);
    }

    public function resetPassword(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json('error', 400);
        }

        if ($req->phoneNumber) {
            $user = User::wherePhoneNumber($req->phoneNumber)->first();
        } else {
            $user = User::whereEmail($req->email)->first();
        }
        if (!$user) {
            return response()->json('error', 400);
        }
        
        $user->password = $req->password;
        $user->save();
        $des = 'Password reset successfully';
            notification('Password Reset',$des,$user->id);
        return response()->json('success', 200);
    }

    public function login(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'password' => 'required',
            'phoneNumber' => [
                Rule::requiredIf($req->has('phoneNumber')),
                'regex:/^\+[0-9]{6,15}$/',
            ],
            'email' => [
                Rule::requiredIf($req->has('email')),
                'email',
            ],
        ]);
        if ($validator->fails()) {
            return response()->json('error', 400);
        }
        if ($req->phoneNumber) {
            $users = Auth::attempt(['phone_number' => $req->phoneNumber, 'password' => $req->password, 'status' => 1]);
            $user = User::wherePhoneNumber($req->phoneNumber)->whereStatus(1)->first();
        } else {
            $users = Auth::attempt(['email' => $req->email, 'password' => $req->password, 'status' => 1]);
            $user = User::whereEmail($req->email)->whereStatus(1)->first();
        }
        if (!$users) {
            return response([
                'message' => ["message: User Not Found"],
            ], 404);
        }
        $token = $user->createToken($user->email)->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token, 
        ];
        if ($user) {
            $des = 'Logged in successfully';
            notification('Logged in', $des, auth()->user()->id);
        }
        return response($response, 200);
    }

    public function logout()
    {
        Auth::logout();
        return response('success', 200);
    }
}
