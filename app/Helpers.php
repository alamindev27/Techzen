<?php

use App\Models\Setting;
use App\Models\Attribute;

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


if (!function_exists('attributes')) {
    function attributes()
    {
        $attributes = Attribute::all();
        if ($attributes) {
            return $attributes;
        }else{
            return false;
        }
    }
}
