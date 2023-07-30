<?php

namespace App\Http\Controllers;

use App\Models\viewteacher;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class ViewteacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function teacherlist()
     {
         //
         $allteacher = DB::table('teacher_tbl')
                         ->get();
         $teachers   = view('admin.viewteacher')
                         ->with('show_all_teacher', $allteacher);
         return view('layout')
                     ->with('viewteacher', $teachers);
         
         //return view('admin.Allstudent');
     }


    public function index()
    {
        //
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
     * @param  \App\Models\viewteacher  $viewteacher
     * @return \Illuminate\Http\Response
     */
    public function show(viewteacher $viewteacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\viewteacher  $viewteacher
     * @return \Illuminate\Http\Response
     */
    public function edit(viewteacher $viewteacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\viewteacher  $viewteacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, viewteacher $viewteacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\viewteacher  $viewteacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(viewteacher $viewteacher)
    {
        //
    }
}
