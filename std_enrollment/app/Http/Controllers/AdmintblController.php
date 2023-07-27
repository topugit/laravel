<?php

namespace App\Http\Controllers;

use App\Models\admintbl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class AdmintblController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    // Admin Login

    public function adminDashboard(){
        return view('admin.dashboard');
    }

    public function adminlogin(Request $request)
    {
        //
        $email      = $request->admin_email;
        $password   = md5($request->password);
        $result     =DB::table('admintbls')
        ->where('admin_email', $email)
        ->where('password', $password)
        ->first();

        if($result){
           Session::put('admin_email', $result->admin_email);
           Session::put('password', $result->password);
           return Redirect::to('/adminDashboard');
        }
        else{
            Session::put('exception', 'Email or Password Invalid');
            return Redirect::to('/admin');
        }
        //return view('admin.dashboard');
    }

    //Logout Function

    public function logout(){
        Session::flush();
        
       

        return Redirect::to('/admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\admintbl  $admintbl
     * @return \Illuminate\Http\Response
     */
    public function show(admintbl $admintbl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admintbl  $admintbl
     * @return \Illuminate\Http\Response
     */
    public function edit(admintbl $admintbl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admintbl  $admintbl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admintbl $admintbl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admintbl  $admintbl
     * @return \Illuminate\Http\Response
     */
    public function destroy(admintbl $admintbl)
    {
        //
    }
}
