@extends('layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
        <h1 class="text-center">Update Student</h1>
            
            <form class="forms-sample" method="post" action="{{URL::to('/updateStudent',$show_single_students->std_id)}}" enctype="multipart/form-data">
                @csrf
            <div class="form-group">
                <label for="name">Student Name</label>
                <input type="text" class="form-control p-input" name="std_name" value= '{{($show_single_students->std_name)}}'>                
            </div>
            <div class="form-group">
                <label for="name">Student Roll</label>
                <input type="number" class="form-control p-input" name="std_roll" value= '{{($show_single_students->std_roll)}}'>                
            </div>
            <div class="form-group">
                <label for="name">Student Father Name</label>
                <input type="text" class="form-control p-input" name="std_father" value= '{{($show_single_students->std_father)}}'>                
            </div>
            <div class="form-group">
                <label for="name">Student Mother Name</label>
                <input type="text" class="form-control p-input" name="std_mother" value= '{{($show_single_students->std_mother)}}'>                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control p-input" name="std_email" aria-describedby="emailHelp" value= '{{($show_single_students->std_email)}}'>
            </div>
            <div class="form-group">
                <label for="name">Student Phone</label>
                <input type="number" class="form-control p-input" name="std_phone" value= '{{($show_single_students->std_phone)}}'>                
            </div>
            <div class="form-group">
                <label for="name">Student Address</label>
                <input type="text" class="form-control p-input" name="std_address" value= '{{($show_single_students->std_address)}}'>                
            </div><!-- 
            <div class="form-group">
                <label for="name">Student Image</label>
                <input type="text" class="form-control p-input" name="std_image" placeholder="Enter Student Image">                
            </div> -->
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control p-input" name="std_password" value= '{{($show_single_students->std_password)}}'> 
            </div>
            
           <!--  <div class="form-group">
                <label for="name">Student Department</label>
                <select name="std_department" id="" class="form-control p-input">
                    <option value="1">CSE</option>
                    <option value="2">BBA</option>
                    <option value="3">PHARMACY</option>
                </select>               
            </div> -->

            <div class="form-group">
                <label for="name">Student Admission Year</label>
                <input type="date" class="form-control p-input" name="std_admissionyear" value= '{{($show_single_students->std_admissionyear)}}'>                
            </div>
               <!--  <div class="form-group">
                    <label for="exampleTextarea">Example textarea</label>
                    <textarea class="form-control p-input" id="exampleTextarea" rows="3"></textarea>
                </div> -->
               <!--  <div class="form-group">
                    <label>Upload Studenet Image</label>
                    <div class="row">
                    <div class="col-12">
                        <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                        <input type="file" class="form-control-file" name="std_image" id="exampleInputFile2" aria-describedby="fileHelp">
                        <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                    </div>
                    </div>
                </div> -->
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection