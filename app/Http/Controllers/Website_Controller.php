<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;

class Website_Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function check_user_not_login(){
        if(Session::get("user_login_id")==""){
            echo redirect("login");
        }
    }
    public function manager_website_settings(){
    	$this->check_user_not_login();
    	return view('user/website-setting');
    }
    public function manager_website_homepage(){
    	$this->check_user_not_login();
    	return view('user/website-homepage');
    }
    public function manager_website_instructors(){
    	$this->check_user_not_login();
    	return view('user/website-instructors');
    }
    public function manager_website_location(){
    	$this->check_user_not_login();
    	return view('user/website-location');
    }
    public function manager_website_schedule(){
    	$this->check_user_not_login();
    	return view('user/website-schedule');
    }
    public function manager_website_forms(){
    	$this->check_user_not_login();
    	return view('user/website-forms');
    }
    public function manager_website_content(){
    	$this->check_user_not_login();
    	return view('user/website-content');
    }
    public function manager_website_gallery(){
    	$this->check_user_not_login();
    	return view('user/website-gallery');
    }
    public function manager_website_pricing(){
    	$this->check_user_not_login();
    	return view('user/website-pricing');
    }
}
