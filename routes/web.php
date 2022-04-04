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
Route::get("manager/dashboard", "Login_Register_Controller@dashboard");
Route::get("manager/members/list", "Login_Register_Controller@manager_members_list");
Route::get("manager/attendance/checkin", "Login_Register_Controller@manager_attendance_checkin");
Route::get("manager/billing/overview", "Login_Register_Controller@manager_billing_overview");
Route::get("manager/marketing/dashboard", "Login_Register_Controller@manager_marketing_dashboard");
Route::get("manager/website/settings", "Login_Register_Controller@manager_website_settings");
Route::get("manager/sales/create", "Login_Register_Controller@manager_sales_create");
Route::get("manager/gym/settings", "Login_Register_Controller@manager_gym_settings");
Route::get("manager/account/settings", "Login_Register_Controller@manager_account_settings");
Route::get("help/docs", "Login_Register_Controller@help_docs");
Route::get("manager/login/logout", "Login_Register_Controller@manager_login_logout");