@extends('layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
        <h1 class="text-center">Add Student</h1>
            <p class="alert-success">
                <?php
                  $exception = Session::get('exception');
                  if($exception){
                    echo $exception;
                    Session::put('exception', null);
                  }
                ?>  
              </p>
            <form class="forms-sample" method="post" action="{{URL::to('/save_student')}}" enctype="multipart/form-data">
                @csrf
            <div class="form-group">
                <label for="name">Student Name</label>
                <input type="text" class="form-control p-input" name="std_name" placeholder="Enter Student Name">                
            </div>
            <div class="form-group">
                <label for="name">Student Roll</label>
                <input type="number" class="form-control p-input" name="std_roll" placeholder="Enter Student Roll">                
            </div>
            <div class="form-group">
                <label for="name">Student Father Name</label>
                <input type="text" class="form-control p-input" name="std_father" placeholder="Enter Student Father">                
            </div>
            <div class="form-group">
                <label for="name">Student Mother Name</label>
                <input type="text" class="form-control p-input" name="std_mother" placeholder="Enter Student Mother">                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control p-input" name="std_email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="name">Student Phone</label>
                <input type="number" class="form-control p-input" name="std_phone" placeholder="Enter Student Phone">                
            </div>
            <div class="form-group">
                <label for="name">Student Address</label>
                <input type="text" class="form-control p-input" name="std_address" placeholder="Enter Student Address">                
            </div><!-- 
            <div class="form-group">
                <label for="name">Student Image</label>
                <input type="text" class="form-control p-input" name="std_image" placeholder="Enter Student Image">                
            </div> -->
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control p-input" name="std_password" placeholder="Password">
            </div>
            
            <div class="form-group">
                <label for="name">Student Department</label>
                <select name="std_department" id="" class="form-control p-input">
                    <option value="1">CSE</option>
                    <option value="2">BBA</option>
                    <option value="3">PHARMACY</option>
                </select>               
            </div>

            <div class="form-group">
                <label for="name">Student Admission Year</label>
                <input type="date" class="form-control p-input" name="std_admissionyear" placeholder="Enter Student Admission Year">                
            </div>
               <!--  <div class="form-group">
                    <label for="exampleTextarea">Example textarea</label>
                    <textarea class="form-control p-input" id="exampleTextarea" rows="3"></textarea>
                </div> -->
                <div class="form-group">
                    <label>Upload Studenet Image</label>
                    <div class="row">
                    <div class="col-12">
                        <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                        <input type="file" class="form-control-file" name="std_image" id="exampleInputFile2" aria-describedby="fileHelp">
                        <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                    </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection