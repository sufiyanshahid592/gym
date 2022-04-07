<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
public function __construct()

    {
        $this->middleware(function ($request, $next) {
            if (!Session::has('admin_user_name') || !Session::has('admin_user_pass')) {
                return redirect('login');
            }
            return $next($request);
        });
    }
    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function changePassword()
    {
        return view('auth.change-password');
    }

    public function updatePassword(Request $request)
    {
        //   echo "Your Password Will be change today!";

        $oldPassword = md5($request->get('oldPassword'));

        $newPassword = $request->input('newPassword');

        $confPassword = $request->input('confPassword');

        //  $activeUser   = DB::table('admin_user')->where('password', $oldPassword)->where('username','admin')->where('status',1)->get();

        $activeUser = DB::table('admin_user')->where('password', $oldPassword)->where('username', 'admin')->where('status', 1)->get();

        if (count($activeUser) > 0) {
            if ($oldPassword == $activeUser[0]->password) {
                if ($newPassword == $confPassword) {
                    $data = [
                        'password' => md5($request->input('newPassword')),
                        // 'password' => $request->input('conf-userpass'),
                    ];
                    Session::put('admin_user_password', $data['password']);

                    Session::flash('Succ_msg', 'Your Password Changed Now');

                    DB::table('admin_user')->update($data);
                    return redirect('changepassword');
                } else {
                    Session::flash('error', 'New and Confirm Password Does not Match');
                    return redirect('changepassword');
                }
            } else {
                Session::flash('error', 'Old Password Does not Match');
                return redirect('changepassword');
            }
        } else {
            Session::flash('error', 'Wrong Password !');
            return redirect('changepassword');
        }
    }

    public function homeSlider()
    {
        return view('admin.homeslider.add-home-slider');
    }

    public function createSlider(Request $request)
    {
        $mini_title = trim($request->input('minititle'));
        $mini_title = ucwords(strtolower($mini_title));

        $data = [
            'mini_title' => $mini_title,
            'big_title' => $request->input('bigtitle'),
            'slider_description' => $request->input('sliderdesc'),
            'slider_altname' => $request->input('altname'),
            'button_link' => $request->input('button_link'),
            'button_text' => $request->input('button_text'),
        ];

        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $fileExtension = $file->getClientOriginalName();
            $fileName = $fileExtension;
            $file->move('images/', $fileName);
            $data['slider_banner'] = $fileName;
        } else {
            $data['slider_banner'] = "";
        }

        //  echo '<pre>';
        //  print_r($data);
        //  die();

        $exists = DB::table('home_slider')->where('mini_title', $mini_title)->first();

        if (!$exists) {
            Session::flash('message', 'Home Slider Inserted Successfully');
            DB::table('home_slider')->insertOrIgnore($data);
            return redirect('home-slider');
        } else {
            Session::flash('error', 'Same Home Slider Already Exist!');
            return redirect('home-slider');
        }
    }

    public function showSlider()
    {
        $data['all_slides'] = DB::table('home_slider')->get();
        return view('admin.homeslider.show-home-slider', $data);
    }

    public function editSlider($id)
    {
        $data['edit_slides'] = DB::table('home_slider')->where('id', $id)->get();
        return view('admin.homeslider.update-home-slider', $data);
    }


    public function onlyViewSlider($id)
    {
        $data['edit_slides'] = DB::table('home_slider')->where('id', $id)->get();
        return view('admin.homeslider.only-view-home-slider', $data);
    }

    public function updateSlider(Request $request, $id)
    {
        $data = [
            'mini_title' => $request->input('minititle'),
            'big_title' => $request->input('bigtitle'),
            'slider_description' => $request->input('sliderdesc'),
            'slider_altname' => $request->input('altname'),
            'button_link' => $request->input('button_link'),
            'button_text' => $request->input('button_text'),
        ];

        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $fileExtension = $file->getClientOriginalName();
            $fileName = $fileExtension;
            $file->move('images/', $fileName);
            $data['slider_banner'] = $fileName;
        } else {
            $data['slider_banner'] = $request->input('oldbanner');
        }

        Session::flash('message', 'Home Slider updated Successfully');
        DB::table('home_slider')->where('id', $id)->update($data);
        return redirect('show-homeslider');
    }


    public function destroyHomeSlider($id)
    {
        DB::table('home_slider')->where('id', $id)->delete();
        Session::flash('message', 'Home Slider Deleted Successfully');
        return redirect('show-homeslider');
    }






    //  ******************** Dynamic Page  Crud  Start ********************  //

    public function dynamic()
    {
        return view('admin.dynamicpage.add-dynamic-page');
    }

    public function createDynamic(Request $request)
    {

        $data = [
            'page_name' => $request->input('page_name'),
            'page_url' => $request->input('page_url'),
            'page_desc' => $request->input('page_desc'),
        ];


        //  echo '<pre>';
        //  print_r($data);
        //  die();

        Session::flash('message', 'dynamic page Inserted Successfully');
        DB::table('dynamic_pages')->insert($data);
        return redirect('add-dynamic-page');

    }

    public function show_dynamic()
    {
        // echo  "Heloo";

      
        $data['all_pages'] = DB::table('dynamic_pages')->get();
        return view('admin.dynamicpage.show-dynamic-page', $data);
    }

    public function edit_dynamic($id)
    {
        $data['edit_page'] = DB::table('dynamic_pages')->where('id', $id)->get();
        return view('admin.dynamicpage.update-dynamic-page', $data);
    }

    public function view_dynamic($id)
    {
        $data['edit_slides'] = DB::table('dynamic_pages')->where('id', $id)->get();
        return view('admin.dynamicpage.only-view-dynamic-page', $data);
    }

    public function update_dynamic(Request $request, $id)
    {
        $data = [
            'page_name' => $request->input('page_name'),
            'page_url' => $request->input('page_url'),
            'page_desc' => $request->input('page_desc'),
        ];


        Session::flash('message', 'Dynamic page updated Successfully');
        DB::table('dynamic_pages')->where('id', $id)->update($data);
        return redirect('show-dynamic-page');
    }


    public function deleteDynamic($id)
    {
        DB::table('dynamic_pages')->where('id', $id)->delete();
        Session::flash('message', 'dynamic page Deleted Successfully');
        return redirect('show-dynamic-page');
    }

    //  ******************** Dynamic Page Crud End ********************  //



    //  ******************** Testimonial Crud  Start ********************  //

    public function testimonial()
    {
        return view('admin.testimonial.add-testimonial');
    }

    public function createTestimonial(Request $request)
    {

        $data = [
            'main_title' => $request->input('client_name'),
            'designation' => $request->input('designation'),
            'slider_description' => $request->input('slider_info'),
        ];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileExtension = $file->getClientOriginalName();
            $fileName = $fileExtension;
            $file->move('images/', $fileName);
            $data['slider_image'] = $fileName;
        } else {
            $data['slider_image'] = "";
        }
        //  echo '<pre>';
        //  print_r($data);
        //  die();

        Session::flash('message', 'Testimonial Slider Inserted Successfully');
        DB::table('testimonial')->insert($data);
        return redirect('add-testimonial');

    }

    public function show_testimonial()
    {
        $data['all_slides'] = DB::table('testimonial')->get();
        return view('admin.testimonial.show-testimonial', $data);
    }

    public function edit_testimonial($id)
    {
        $data['edit_slides'] = DB::table('testimonial')->where('id', $id)->get();
        return view('admin.testimonial.update-testimonial', $data);
    }

    public function view_testimonial($id)
    {
        $data['edit_slides'] = DB::table('testimonial')->where('id', $id)->get();
        return view('admin.testimonial.only-view-testimonial', $data);
    }

    public function update_testimonial(Request $request, $id)
    {
        $data = [
            'main_title' => $request->get('client_name'),
            'designation' => $request->get('designation'),
            'slider_description' => $request->get('slider_info'),
        ];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileExtension = $file->getClientOriginalName();
            $fileName = $fileExtension;
            $file->move('images/', $fileName);
            $data['slider_image'] = $fileName;
        } else {
            $data['slider_image'] = $request->input('oldimage');
        }

        Session::flash('message', 'Home Slider updated Successfully');
        DB::table('testimonial')->where('id', $id)->update($data);
        return redirect('show-testimonial');
    }


    public function deleteTestmonial($id)
    {
        DB::table('testimonial')->where('id', $id)->delete();
        Session::flash('message', 'Testimonial Slide Deleted Successfully');
        return redirect('show-testimonial');
    }

    //  ******************** Testimonial Crud End ********************  //



    //  ******************** Video Crud  Start ********************  //

    public function video()
    {

        $data['vid_link'] =  DB::table('video')->get();
        return view('admin.video.add-video',  $data);
    }

    public function createVideo(Request $request)
    {
               $check=DB::table('video')->get();

             if( $check->count() > 0){

                // echo "updated";
                // die();
                $data = [
                    'video_title' => $request->input('video_title'),
                    'video_link' => $request->input('video_link'),
                ];
                Session::flash('message', 'Video Updated Successfully');
                DB::table('video')->update($data);
                return redirect('add-video');
             }

              else{
                // echo "Inserted";
                // die();
                    $data = [
                        'video_title' => $request->input('video_title'),
                        'video_link' => $request->input('video_link'),
                    ];
                    Session::flash('message', 'Video Inserted Successfully');
                    DB::table('video')->insert($data);
                    return redirect('add-video');
             }

    }


    //  ******************** video Crud End ********************  //


    //  ******************** Video Crud  Start ********************  //

    public function socials()
    {
         $data['socials_links'] =  DB::table('socials_media')->get();
        return view('admin.socials.add-social-icons', $data);
    }

    public function create_socials_Links(Request $request)
    {
               $check=DB::table('socials_media')->get();


               if( $check->count() > 0){
                    $data = [
                        'facebook_link' => $request->input('facebook_link'),
                        'twitter_link' => $request->input('twitter_link'),
                        'pinterest_link' => $request->input('pinterest_link'),
                        'instagram_link' => $request->input('instagram_link'),
                    ];
                    Session::flash('message', 'Socials Links Updated Successfully');
                    DB::table('socials_media')->update($data);
                    return redirect('add-socials');
             }

             else{
                $data = [
                    'facebook_link' => $request->input('facebook_link'),
                    'twitter_link' => $request->input('twitter_link'),
                    'pinterest_link' => $request->input('pinterest_link'),
                    'instagram_link' => $request->input('instagram_link'),
                ];

                Session::flash('message', 'Socials Links Inserted Successfully');
                DB::table('socials_media')->insert($data);
                return redirect('add-socials');
             }

    }


    //  ******************** video Crud End ********************  //


     
      //  ******************** Csv_file Start ********************  //

    public function csv_file(){
          return view('csv.csv_file_2');
    }



    public function upload_csv(Request $request){
        $file = $request->file('file');

      // File Details
      $filename = $file->getClientOriginalName();
      $extension = $file->getClientOriginalExtension();
      $tempPath = $file->getRealPath();
      $fileSize = $file->getSize();
      $mimeType = $file->getMimeType();

      // Valid File Extensions
      $valid_extension = array("csv");

      // 2MB in Bytes
      $maxFileSize = 2097152;

      // Check file extension
      if(in_array(strtolower($extension),$valid_extension)){

        // Check file size
        if($fileSize <= $maxFileSize){

          // File upload location
          $location = 'images';

          // Upload file
          $file->move($location,$filename);

          // Import CSV to Database
          $filepath = 'http://127.0.0.1:8000/'.$location."/".$filename;

          // Reading file
          $file = fopen($filepath,"r");

          $importData_arr = array();
          $i = 0;

          while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
             $num = count($filedata );

             // Skip first row (Remove below comment if you want to skip the first row)
             /*if($i == 0){
                $i++;
                continue;
             }*/
             for ($c=0; $c < $num; $c++) {
                $importData_arr[$i][] = $filedata [$c];
             }
             $i++;
          }
          fclose($file);

          // Insert to MySQL database
          foreach($importData_arr as $importData){

            $insertData = array(
               "name"=>$importData[0],
               );

             echo "<pre>";

              print_r($insertData);
              die();
          DB::table('users')->insert($insertData);

          }
          Session::flash('message','Import Successful.');
        }else{
          Session::flash('message','File too large. File must be less than 2MB.');
        }

      }else{
         Session::flash('message','Invalid File Extension.');
      }



    // Redirect to index
    return redirect('website-form');
  }


       //  ******************** Csv_file End ********************  //



}
