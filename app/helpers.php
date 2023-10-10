<?php

use App\Mail\EmailVerfication;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Stichoza\GoogleTranslate\GoogleTranslate;

if (!function_exists('lang')) {

    function lang($string)
    {
        $code = Session::get('locale', 'en');

        $cacheKey = 'translation:' . $code . ':' . md5($string);

        return Cache::remember($cacheKey, now()->addMinutes(60), function () use ($string, $code) {
            $langPath = resource_path('lang/' . $code . '.json');

            if (!File::exists($langPath)) {
                File::put($langPath, '{}');
            }

            $langs = json_decode(File::get($langPath), true);

            if (!is_null($langs) && !array_key_exists($string, $langs)) {
                $tr = new GoogleTranslate($code);
                $translatedString = $tr->translate($string);
                $langs[$string] = $translatedString;

                $final_data = json_encode($langs, JSON_UNESCAPED_UNICODE);
                file_put_contents($langPath, $final_data);

                return $translatedString;
            }

            return $langs[$string];
        });
    }

}

if (!function_exists('notification')) {
    function notification($name, $description, $user_id, $type = null, $quote_id = null)
    {
        $notification = new Notification();
        $notification->name = $name;
        $notification->description = $description;
        $notification->user_id = $user_id;
        $notification->type = $type;
        $notification->quote_id = $quote_id;
        $notification->save();
        return $notification;
    }
}

if (!function_exists('user_id')) {
    function user_id()
    {
        // return auth()->user()->id;
        return 35655464564;
    }
}

if (!function_exists('user_name')) {
    function user_name()
    {
        return auth()->user()->first_name . ' ' . auth()->user()->last_name;
    }
}

if (!function_exists('cartStore')) {
    function cartStore($id, $col, $date, $start_time, $end_time)
    {
        $colum = $col . '_id';
        $cart = new Cart();
        $cart->$colum = $id;
        $cart->user_id = auth()->user()->id;
        $cart->type = $col;
        $cart->date = $date;
        $cart->start_time = $start_time;
        $cart->end_time = $end_time;
        $cart->save();
    }
}

if (!function_exists('sendOtpApi')) {
    function sendOtpApi($req)
    {
        try {
            // $otp = rand( 111111, 999999 );
            $otp = 111111;

            if ($req->phoneNumber) {
                $user = User::wherePhoneNumber($req->phoneNumber)->first();
                $user->otp = $otp;
                $user->save();
                sendMessage($req->phoneNumber, $otp);
            } else {
                $user = User::where('email', $req->email)->first();
                $user->otp = $otp;
                $user->save();
                Mail::to($req->email)->send(new EmailVerfication($otp));
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
if (!function_exists('sendMessage')) {
    function sendMessage($phone_number = null, $otp = null)
    {
        // dispatch( new SendSms( $phone_number, $otp ) );
    }
}
if (!function_exists('orderStore')) {
    function orderStore($id, $col, $date, $start_time, $end_time, $amount, $discount)
    {
        $colum = $col . '_id';
        $order = new Order();
        $order->$colum = $id;
        $order->user_id = user_id();
        $order->type = $col;
        $order->date = $date;
        $order->start_time = $start_time;
        $order->end_time = $end_time ?? null;
        $order->amount = $amount;
        $order->discount = $discount;
        $order->save();
    }
}

if (!function_exists('s3Link')) {
    function s3Link($link)
    {
        // return $link ? Storage::disk("s3")->url($link) : null;
        return $link;
    }
}
