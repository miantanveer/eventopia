<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserBaseController;
use Illuminate\Http\Request;

class LanguageController extends UserBaseController
{
    public function local($str)
    {
        $langPath = resource_path('lang/');
        if (!file_exists($langPath) || !file_exists($langPath . '/' . $str . '.json')) {
            // Create a new empty code.json file
            file_put_contents($langPath . '/' . $str . '.json', '{}');
        }
        \Session::put('locale', $str);
        return back();
    }
}
