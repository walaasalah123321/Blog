<?php

use App\Models\Setting;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;

App::setLocale('en');

Route::get('/dash', function () {

    return view('dashboard.index');
});
Route::group(["prefix"=>"admin/","as"=>'admin.',"middleware"=>'auth'],function(){

    Route::group(["prefix"=>"setting","as"=>"setting."],function(){
        Route::get("/",function(){
            return view('dashboard.setting');
        })->name('setting');
        
        Route::post("update/{setting}",[SettingController::class,"update"])->name('store');
       
    });
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
