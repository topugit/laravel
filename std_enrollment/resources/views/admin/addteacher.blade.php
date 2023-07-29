@extends('layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
        <h1 class="text-center">Add Teacher</h1>
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
                <label for="name">Teacher Name</label>
                <input type="text" class="form-control p-input" name="std_name" placeholder="Enter Student Name">                
            </div>
            <div class="form-group">
                <label for="name">Student Roll</label>
                <input type="number" class="form-control p-input" name="std_roll" placeholder="Enter Student Roll">                
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
            </div>
            
                
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection