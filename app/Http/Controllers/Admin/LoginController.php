<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function view_login_form() {
        return view('admin.auth.login');
    }
    
    public function login(LoginRequest $request) {
 
        if(auth()->guard('admin')->attempt(['email'=>$request->input('email'),'password'=>$request->input('password')])){
            return redirect()->route('adminPanel.dashboard');
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/home');
    }

}