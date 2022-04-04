<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;

class Login_Register_Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function check_user_login(){
    	if(Session::get("user_login_id")==""){
    		echo redirect("login");
    	}
    }
    public function register(){
    	return view("user/register");
    }
    public function register_process(Request $request){
    	$data['full_name'] = $request->full_name;
    	$data['e_mail'] = $request->e_mail;
    	$data['password'] = md5($request->password);
    	$result = DB::table("users")->insert($data);
    	if($result==1){
    		return redirect("login")->with("success", "Your Account Register Successfully");
    	}
    }
    public function login(){
    	return view("user/login");
    }
    public function login_process(Request $request){
    	$e_mail = $request->e_mail;
    	$password = md5($request->password);
    	$result = DB::table("users")->where("e_mail", $e_mail)->where("password", $password)->get();
    	if(count($result)==1){
    		Session::put("user_login_id", $result[0]->user_id);
    		return redirect("dashboard")->with("success", "Your Account Register Successfully");
    	}
    }
    public function dashboard(){
    	$this->check_user_login();
    	return view("user/dashboard");
    }
}
