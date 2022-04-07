<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    
    public function index(){  
      $data['slider'] = DB::table("sections")->where("section_id", 23)->get();
      /*print_r($data);
      die();*/
      return view('web/index', $data);
    }
    public function software_gym(){
        

        return view('web/software_jym');

    }
    public function software_martial_arts(){
        

        return view('web/software_martial_arts');

    }

    public function software_gymnastics(){
        

        return view('web/software_gymnastics');

    }
    public function  software_yoga(){
   
        

        return view('web/software_yoga');

    }
    public function  software_dance(){
   
        

        return view('web/software_dance');

    }
    public function  features_members(){
   
        

        return view('web/features_members');

    }
    public function   features_billing(){
   
     return view('web/features_billing');

    }
    public function   features_attendance(){
   
        return view('web/features_attendance');
   
       }
       public function   features_booking(){
   
        return view('web/features_booking');
   
       }
       public function   features_website(){
   
        return view('web/features_website');
   
       }
       public function   features_reporting(){
   
        return view('web/features_reporting');
   
       }
       public function   features_marketing(){
   
        return view('web/features_marketing');
   
       }
       public function   features_pos(){
   
        return view('web/features_pos');
   
       }
       public function   pricing(){
   
        return view('web/pricing');
   
       }
       public function   blog(){
   
        return view('web/blog');
   
       }
       public function   podcast(){
   
        return view('web/podcast');
   
       }
       public function   contact(){
   
        return view('web/contact');
   
       }
       public function   login(){
   
        return view('web/login');
   
       }
       public function   register(){
   
        return view('web/register');
   
       }
       public function   content_about(){
   
        return view('web/content_about');
   
       }
       public function  alternative_mindbody(){
   
        return view('web/alternative_mindbody');
   
       }


       public function  alternative_zenplanner(){
   
        return view('web/alternative_zenplanner');
   
       }
       
       public function  alternative_kicksite(){
   
        return view('web/alternative_kicksite');
   
       }
       public function  alternative_spark(){
   
        return view('web/alternative_spark');
   
       }
       public function  alternative_pushpress(){
   
        return view('web/alternative_pushpress');
   
       }
       public function   alternative_gymmaster (){
   
        return view('web/alternative_gymmaster');
   
       }
       public function   software_membership_clubs (){
   
        return view('web/software_membership_clubs');
   
       }
       public function   lp_contract_template (){
   
        return view('web/lp_contract_template');
   
       }
       public function   lp_bbwidget (){
   
        return view('web/lp_bbwidget');
   
       }
       public function   best_gym_management_software (){
   
        return view('web/best_gym_management_software');
   
       }
       public function   page_trust (){
   
        return view('web/page_trust');
   
       }
       public function   page_terms (){
   
        return view('web/page_terms');
   
       }
       public function  page_privacy (){
   
        return view('web/page_privacy');
   
       }
      
    
       

    
}
