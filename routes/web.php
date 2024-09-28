<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\SettingController;

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
Route::group([ 'middleware' => ['set_locale']], function () {

    Route::get('/language/{lang}', [SettingController::class, 'changeLanguage'])->name('change-language');


Route::get('/',[HomeController::class,'index']);
Route::get('/about',[PageController::class,'about']);

Route::get('/civil-divisions',[PageController::class,'civilDivisions']);
Route::get('/military-divisions',[PageController::class,'militaryDivisions']);
Route::get('/medical-divisions',[PageController::class,'medicalDivisions']);
Route::get('/division/{id}',[PageController::class,'division']);


Route::get('/projects',[PageController::class,'projects']);
Route::get('/project/{id}',[PageController::class,'projectSingle']);

Route::get('contact',[MessageController::class,'index'])->name('contact.sitelayout');
Route::post('contact',[MessageController::class,'store'])->name('contact.store');
});