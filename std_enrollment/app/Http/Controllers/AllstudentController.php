<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();
class AllstudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function studentlist()
    {
        //
        $liststudent = DB::table('std_tbl')
                        ->get();
        $students   = view('admin.Allstudent')
                        ->with('show_students', $liststudent);
        return view('layout')
                    ->with('allstudent', $students);
        
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($anyid)
    {
        //
        $singleStd = DB::table('std_tbl')
                    ->select('*')
                    ->where('std_id', $anyid)
                    ->first();
        $single_student   = view('admin.singleStudent')
                            ->with('show_single_students', $singleStd);
        return view('layout')
                ->with('singleStudent', $single_student);

        //return view('admin.singleStudent');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($anyid)
    {
        //
        $singleStd      = DB::table('std_tbl')
                            ->select('*')
                            ->where('std_id', $anyid)
                            ->first();                    
        $single_student = view('admin.editStudent')
                            ->with('show_single_students', $singleStd);
        return view('layout')
                ->with('editStudent', $single_student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $anyid)
    {
        //
        $data   = array();
        $data['std_name'] = $request->std_name;
        $data['std_roll'] = $request->std_roll;
        $data['std_father'] = $request->std_father;
        $data['std_mother'] = $request->std_mother;
        $data['std_email'] = $request->std_email;
        $data['std_phone'] = $request->std_phone;
        $data['std_address'] = $request->std_address;
        $data['std_password'] = $request->std_password;
        $data['std_admissionyear'] = $request->std_admissionyear;

        DB::table('std_tbl')
            ->where('std_id', $anyid)
            ->update($data);

        Session::put('exception', 'Student Update Successful');
        return Redirect::to('/allstudent');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($student_id)
    {
        //
        DB::table('std_tbl')
            ->where('std_id', $student_id)
            ->delete();
        return Redirect::to('/allstudent');
    }
}
