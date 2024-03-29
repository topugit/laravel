<?php

namespace App\Http\Controllers;

use App\Models\studenttbl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();
class StudenttblController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function studentLogin(Request $request)
    {
        $email      = $request->std_email;
        $password   = md5($request->std_password);
        $result     =DB::table('std_tbl')
        ->where('std_email', $email)
        ->where('std_password', $password)
        ->first();

        if($result){
           Session::put('std_email', $result->std_email);
           Session::put('std_password', $result->std_password);
           return Redirect::to('studentDashboard');
        }
        else{
            Session::put('exception', 'Email or Password Invalid');
            return Redirect::to('/');
        }
    }
    public function index()
    {
        //
        return view('student.dashboard');
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
     * @param  \App\Models\studenttbl  $studenttbl
     * @return \Illuminate\Http\Response
     */
    public function show(studenttbl $studenttbl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\studenttbl  $studenttbl
     * @return \Illuminate\Http\Response
     */
    public function edit(studenttbl $studenttbl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\studenttbl  $studenttbl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, studenttbl $studenttbl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\studenttbl  $studenttbl
     * @return \Illuminate\Http\Response
     */
    public function destroy(studenttbl $studenttbl)
    {
        //
    }
}
