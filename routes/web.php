<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("register", "Login_Register_Controller@register");
Route::post("register-process", "Login_Register_Controller@register_process");
Route::get("login", "Login_Register_Controller@login");
Route::post("login-process", "Login_Register_Controller@login_process");
Route::get("dashboard", "Login_Register_Controller@dashboard");