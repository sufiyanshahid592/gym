<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        

        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login_user(Request $request)
    {
       

        // dd($request->all());

          $email  =  $request->get('useremail');

          $password = md5($request->get('password'));

        //   echo "user login trying";



        $active_user = DB::table('admin_user')->where('useremail', $email)->where('status',1)->get();

        // echo "<pre>";
        // print_r($active_user);
        // die();


        if(!empty($active_user) && count($active_user) > 0){

                 if( $active_user[0]->password == $password ){

                    Session::put('admin_user_name', $active_user[0]->username);
                    Session::put('admin_user_email', $active_user[0]->useremail);
                    Session::put('admin_user_pass', $active_user[0]->password);

                    Session::flash('message','You are logged in successfullly !');
                    return  redirect('/dashboard');

                 }else{
                     Session::flash('message','Password Mismatch !');
                     return redirect('login');
                 }

        }
        else{
                     Session::flash('message','Data does not exists!  !');
                     return redirect('login');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
          Session::flush();
          Session::forget('username');
          Session::forget('useremail');
          Session::forget('password');
          Session::flash('logout_msg'," You'r logout successfully! ");
          return redirect('login');
    }
}
