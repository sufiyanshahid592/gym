<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
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
        return view('admin.blogs.add-blog');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    
    //     $blog_title = trim($request->input('blogtitle'));
        
    //     ucwords(strtolower($blog_title));

    //     $product_name = trim($request->input('productname'));
    //    $productname  = ucwords(strtolower($product_name));


    $blog_title =   trim($request->input('blogtitle'));

    $blogtitle =  ucwords(strtolower($blog_title));


        $data = array(

            'blog_title' => $blogtitle,
            'blog_url' => $request->input('blogurl'),
            'meta_title' => $request->input('metatitle'),
            'meta_description' => $request->input('metadescription'),
            'meta_tags' => $request->input('metatags'),
            'author_name' => $request->input('authorname'),
            'tags_clouds' => $request->input('tagclouds'),
            'blog_long_desc' => $request->input('longdescription'),
            'blog_altname' => $request->input('altname'),
        ) ;


         if($request->hasFile('image')){

           $file = $request->file('image');

           $fileExtension = $file->getClientOriginalName();

           $fileName = $fileExtension;

           $file->move('images/',$fileName);

           $data['blog_image'] =  $fileName;

        }else{
            $data['blog_image'] = " ";
        }

        // echo "<pre>";
        // print_r($data);
        // die();


        $exists = DB::table('blogs')->where('blog_title',   $blogtitle)->first();


        if(!$exists){
               Session::flash('message', 'Blogs  inserted successfully !');
               DB::table('blogs')->insert($data);
               return redirect('addblog');
        }

        else{

            Session::flash('error', 'Same Blog inserted Allready !');
            return redirect('addblog');
        }


    }


    public function store(Request $request)
    {
        //
    }


    public function showBlog()
    {
          $data['all_blogs'] = DB::table('blogs')->get();
          return view('admin.blogs.show-blog',  $data);
    }



    public function edit($id)
    {
         $data['edit_view'] = DB::table('blogs')->where('id', $id)->get();
         return view('admin.blogs.update-blog',$data);

    }



    public function viewBlog($id)
    {
         $data['edit_view'] = DB::table('blogs')->where('id', $id)->get();
         return view('admin.blogs.view-blog',$data);

    }



    public function update(Request $request, $id)
    {
        
    $blog_title =   trim($request->input('blogtitle'));

    $blogtitle =  ucwords(strtolower($blog_title));


        $data = array(

            'blog_title' => $blogtitle,
             'blog_url' => $request->input('blogurl'),
             'meta_title' => $request->input('metatitle'),
             'meta_description' => $request->input('metadescription'),
             'meta_tags' => $request->input('metatags'),
             'tags_clouds' => $request->input('tagclouds'),
             'author_name' => $request->input('authorname'),
             'blog_long_desc' => $request->input('longdescription'),
             'blog_altname' => $request->input('altname'),
         );
         if($request->hasFile('image')){
              $file = $request->file('image');
              $file_extension = $file->getClientOriginalName();
              $fileName = $file_extension;
              $file->move('image/', $fileName );
              $data['blog_image']  =  $fileName;
         }else{
            $data['blog_image']  =  $request->input('oldImage');
         }

        DB::table('blogs')->where('id' , $id)->update($data);
        Session::flash('message' , 'Your blog Updated Successfully');
        return redirect('/showblog');
    }


    public function destroy($id)
    {
        // echo "Testing Delete Id";

        DB::table('blogs')->where('id', $id)->delete();
        Session::flash('message' , 'Your blog deleted Successfully');
        return redirect('/showblog');
    }
}
