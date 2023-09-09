<?php
use App\Models\Cart;
use App\Models\Notification;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
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

// if (!function_exists('lang')) {
//     function lang($string)
//     {
//         $code = \Session::get('locale');

//         if ($code == null) {
//             $code = 'en';
//         }

//         $langPath = resource_path('lang/');

//         if (!file_exists($langPath) || !file_exists($langPath . '/' . $code . '.json')) {
//             file_put_contents($langPath . '/' . $code . '.json', '{}');
//         }

//         $lang_file = file_get_contents(resource_path('lang/' . $code . '.json'));
//         $langs = json_decode($lang_file, true);

//         if (!is_null($langs) && array_key_exists($string, $langs)) {
//             return $langs[$string];
//         } else {
//             $current_data = file_get_contents(resource_path('lang/' . $code . '.json'));
//             $array_data = json_decode($current_data, true);
//             $tr = new GoogleTranslate($code);
//             $array_data[$string] = $tr->translate($string);
//             $final_data = json_encode($array_data, JSON_UNESCAPED_UNICODE);

//             file_put_contents(resource_path('lang/' . $code . '.json'), $final_data);

//             return $tr->translate($string);
//         }
//     }
// }

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
        return auth()->user()->id;
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
