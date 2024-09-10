<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\DivisionSectionController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\DivisionController;
use App\Http\Controllers\Admin\MessageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix'=>'adminPanel','middleware'=> 'auth:admin'],function(){
    Route::get('dashboard',[DashboardController::class,'index'])->name('adminPanel.dashboard');

    Route::resource('dashboard/slider',SliderController::class);
    Route::resource('dashboard/pages',PageController::class);
    Route::resource('dashboard/division/category',DivisionSectionController::class);
    Route::resource('dashboard/division/post',DivisionController::class);
    
    Route::resource('dashboard/project',ProjectController::class);
    Route::get('dashboard/contact',[MessageController::class,'dashboard'])->name('contact');
});

Route::get('/adminPanel/logout',[LoginController::class,'logout'])->name('adminPanel.logout');

Route::group(['prefix'=>'adminPanel','middleware'=> 'guest:admin'],function(){
    Route::get('/login',[LoginController::class,'view_login_form'])->name('adminPanel.showlogin');
    Route::post('login',[LoginController::class,'login'])->name('adminPanel.login');

});