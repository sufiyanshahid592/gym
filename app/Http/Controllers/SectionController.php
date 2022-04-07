<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SectionController extends Controller
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
        return view('admin.sections.add-section');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    
    //     $section_title = trim($request->input('section_title'));
        
    //     ucwords(strtolower($section_title));

    //     $product_name = trim($request->input('productname'));
    //    $productname  = ucwords(strtolower($product_name));


    $section_title =   trim($request->input('section_title'));

    $section_title =  ucwords(strtolower($section_title));


        $data = array(

            'section_title' => $section_title,
            'section_long_desc' => $request->input('longdescription'),
        ) ;

        // echo "<pre>";
        // print_r($data);
        // die();


        $exists = DB::table('sections')->where('section_title',   $section_title)->first();


        if(!$exists){
               Session::flash('message', 'sections  inserted successfully !');
               DB::table('sections')->insert($data);
               return redirect('add-section');
        }

        else{

            Session::flash('error', 'Same Section inserted Allready !');
            return redirect('add-section');
        }


    }


    public function store(Request $request)
    {
        //
    }


    public function showSections()
    {
          $data['all_sections'] = DB::table('sections')->get();
          return view('admin.sections.show-sections',  $data);
    }



    public function edit($id)
    {
         $data['edit_view'] = DB::table('sections')->where('section_id', $id)->get();
         return view('admin.sections.update-section',$data);

    }



    public function viewSection($id)
    {
         $data['edit_view'] = DB::table('sections')->where('id', $id)->get();
         return view('admin.sections.view-section',$data);

    }



    public function update(Request $request, $id)
    {
        
    $section_title =   trim($request->input('section_title'));

    $section_title =  ucwords(strtolower($section_title));


        $data = array(

            'section_title' => $section_title,
            'section_long_desc' => $request->input('longdescription'),
        );

        DB::table('sections')->where('id' , $id)->update($data);
        Session::flash('message' , 'Your Section Updated Successfully');
        return redirect('/show-sections');
    }


    public function destroy($id)
    {
        // echo "Testing Delete Id";

        DB::table('sections')->where('id', $id)->delete();
        Session::flash('message' , 'Your Section deleted Successfully');
        return redirect('/show-sections');
    }
}
