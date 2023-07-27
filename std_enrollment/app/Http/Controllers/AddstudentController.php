<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use APP\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
Session_start();

class AddstudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addstudent(){

        return view('admin.addstudent');
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
        $data=array();
            $data['std_name']=$request->std_name;
            $data['std_roll']=$request->std_roll;
            $data['std_father']=$request->std_father;
            $data['std_mother']=$request->std_mother;
            $data['std_email']=$request->std_email;
            $data['std_phone']=$request->std_phone;
            $data['std_address']=$request->std_address;
            $data['std_password']=md5($request->std_password);
            $data['std_department']=$request->std_department;
            $data['std_admissionyear']=$request->std_admissionyear;
            $image = $request->file('std_image');

            if ($image) {
                $image_name = Str::random(20);
                $ext = strtolower($image->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'image/';
                $image_url = $upload_path . $image_full_name;
                $success = $image->move($upload_path, $image_full_name);
            
                if ($success) {
                    $data['std_image'] = $image_url;
                    DB::table('std_tbl')->insert($data);
                    Session::put('exception', 'Student Added Successfully!!!');
                } else {
                    Session::put('exception', 'Image upload failed! Please try again.');
                }
            } else {
                Session::put('exception', 'Image not found in the request! Please select an image.');
            }
            
            return Redirect::to('/addstudent');
            
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
    public function destroy($id)
    {
        //
    }
}
