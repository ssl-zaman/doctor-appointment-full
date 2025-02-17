<?php

use App\Models\Setting\CompanySetting;
use Illuminate\Support\Facades\Storage;

if(!function_exists('company_info')){


    function company_info($column){
        $info = CompanySetting::first();

        if($info && $info->{$column}){
            return $info->{$column};
        }

        return null;
    }
}

if(!function_exists('company_info_file')){
    function company_info_file($column){
        $info = CompanySetting::first();
        if($info && $info->{$column}){
            return asset('storage/'.$info->{$column});
        }

        return null;
    }
}

