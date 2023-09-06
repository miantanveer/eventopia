<?php
use App\Models\Cart;
use App\Models\Notification;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Google\Cloud\Translate\V2\TranslateClient;

if (!function_exists('lang')) {
    function lang($string)
    {
        return $string;
        // $code = \Session::get('locale');
        // if ($code == null) {
        //     $code = 'en';
        // }
        // //    $tr = new GoogleTranslate($code);
        // //    $tr->translate($string);
        // $lang_file = file_get_contents(resource_path('lang/' . $code . '.json'));
        // $langs = json_decode($lang_file, true);
        // if (array_key_exists($string, $langs)) {
        //     return $langs[$string];
        // } else {
        //     // ******** Write Data Into Json ***************
        //     $current_data = file_get_contents(resource_path('lang/' . $code . '.json'));
        //     $array_data = json_decode($current_data, true);
        //     $tr = new GoogleTranslate($code);
        //     $array_data[$string] = $tr->translate($string);
        //     $final_data = json_encode($array_data, JSON_UNESCAPED_UNICODE);
        //     file_put_contents(resource_path('lang/' . $code . '.json'), $final_data);
        //     return $tr->translate($string);
        // }
    }
}
if (!function_exists('notification')) {
    function notification($name, $description, $user_id, $type, $quote_id)
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
if (!function_exists('locale')) {
    function locale($str)
    {
        // Check if the language file exists for the given locale
        $langPath = resource_path('lang/');
        if (!file_exists($langPath) || !file_exists($langPath . '/'.$str.'.json')) {
            // Create a new empty code.json file
            file_put_contents($langPath . '/'.$str.'.json', '{}');
        }

        // Store the selected locale in the session
        Session::put('locale', $str);
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
