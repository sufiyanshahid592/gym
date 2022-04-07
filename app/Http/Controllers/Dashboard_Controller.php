<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;

class Dashboard_Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function check_user_login(){
    	if(Session::get("user_login_id")==""){
    		echo redirect("login");
    	}
    }
    public function dashboard(){
    	$this->check_user_login();
    	return view("user/dashboard");
    }
}
