<?php

use App\Http\Classes\AppSetting;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Notifications\NewNotification;

if ( !function_exists('isRtl') ) {

    function isArabic() : bool
    {
        return getLocale() === "ar";
    }

}

if(!function_exists('getLocale')){

    function getLocale() : string
    {
        return app()->getLocale();
    }
}
 

 