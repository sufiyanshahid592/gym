<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;

class Marketing_Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function check_user_not_login(){
        if(Session::get("user_login_id")==""){
            echo redirect("login");
        }
    }
    public function manager_marketing_dashboard(){
    	$this->check_user_not_login();
    	return view("user/marketing-dashboard");
    }
    public function manager_marketing_referrals(){
    	$this->check_user_not_login();
    	return view("user/marketing-referrals");
    }
    public function manager_marketing_leads(){
    	$this->check_user_not_login();
    	return view("user/marketing-leads");
    }
    public function manager_marketing_messaging(){
    	$this->check_user_not_login();
    	return view("user/marketing-messaging");
    }
    public function manager_automations_manage(){
    	$this->check_user_not_login();
    	return view("user/automations-manage");
    }
    public function manager_marketing_settings(){
    	$this->check_user_not_login();
    	return view("user/marketing-setting");
    }
}
