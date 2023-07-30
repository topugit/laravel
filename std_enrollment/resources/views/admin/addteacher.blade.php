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
            <form class="forms-sample" method="post" action="{{URL::to('/save_teacher')}}" enctype="multipart/form-data">
                @csrf
            <div class="form-group">
                <label for="name">Teacher Name</label>
                <input type="text" class="form-control p-input" name="teacher_name" placeholder="Enter Teacher Name">                
            </div>
            <div class="form-group">
                <label for="name">Teacher Phone</label>
                <input type="number" class="form-control p-input" name="teacher_phone" placeholder="Enter Teacher Phone">                
            </div>
            <div class="form-group">
                <label for="name">Gender</label>
                <input type="text" class="form-control p-input" name="teacher_gender" placeholder="Enter Gender">                
            </div>
            <div class="form-group">
                <label for="name">Department</label>
                <input type="text" class="form-control p-input" name="teacher_dept" placeholder="Enter Department">                
            </div>
            <div class="form-group">
                <label for="name">Teacher Salary</label>
                <input type="number" class="form-control p-input" name="teacher_salary" placeholder="Enter Teacher Salary">                
            </div>
            
                
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection