<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;

class Members_Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function check_user_not_login(){
        if(Session::get("user_login_id")==""){
            echo redirect("login");
        }
    }
    public function manager_members_list(){
    	$this->check_user_not_login();
    	return view("user/members-list");
    }
    public function manager_attendance_checkin(){
    	$this->check_user_not_login();
    	return view("user/attendance-checkin");
    }
    public function manager_attendance_overview(){
        $this->check_user_not_login();
        return view("user/attendance-overview");
    }
    public function manager_attendance_list(){
        $this->check_user_not_login();
        return view("user/attendance-list");
    }
    public function manager_attendance_promotions(){
        $this->check_user_not_login();
        return view("user/attendance-promotions");
    }
    public function manager_attendance_members(){
        $this->check_user_not_login();
        return view("user/attendance-members");
    }
    public function manager_attendance_sessions(){
        $this->check_user_not_login();
        return view("user/attendance-sessions");
    }
    public function manager_attendance_multi(){
        $this->check_user_not_login();
        return view("user/attendance-multi");
    }
    public function manager_attendance_settings(){
        $this->check_user_not_login();
        return view("user/attendance-settings");
    }
    public function manager_memberships_manage(){
        $this->check_user_not_login();
        return view("user/memberships-manage");
    }
    public function manager_docs_manage(){
        $this->check_user_not_login();
        return view("user/docs-manage");
    }
    public function manager_content_members(){
        $this->check_user_not_login();
        return view("user/content-members");
    }
    public function manager_members_summary(){
        $this->check_user_not_login();
        return view("user/members-summary");
    }
    public function manager_members_settings(){
        $this->check_user_not_login();
        return view("user/members-setting");
    }
}
