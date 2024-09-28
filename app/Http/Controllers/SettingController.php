<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function changeLanguage(Request $request)
    {
        session()->put('locale', $request->lang);
        return redirect()->back();
    }
}
