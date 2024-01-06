<?php

use App\Models\Setting;

if (!function_exists('setting')) {
    function setting()
    {
        $setting = Setting::where('id', 1)->first();
        if ($setting) {
            return $setting;
        }else{
            return false;
        }
    }
}
