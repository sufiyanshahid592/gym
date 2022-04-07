<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;

class Billing_Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function check_user_not_login(){
        if(Session::get("user_login_id")==""){
            echo redirect("login");
        }
    }
    public function manager_billing_overview(){
    	$this->check_user_not_login();
    	return view("user/billing-overview");
    }
    public function manager_billing_payments(){
    	$this->check_user_not_login();
    	return view("user/billing-payment");
    }
    public function manager_billing_recurring(){
    	$this->check_user_not_login();
    	return view("user/billing-recurring");
    }
    public function manager_billing_discounts(){
    	$this->check_user_not_login();
    	return view("user/billing-discount");
    }
    public function manager_billing_forms(){
    	$this->check_user_not_login();
    	return view("user/billing-forms");
    }
    public function manager_billing_accounting(){
    	$this->check_user_not_login();
    	return view("user/billing-accounting");
    }
    public function manager_billing_balances(){
    	$this->check_user_not_login();
    	return view("user/billing-balances");
    }
}
