@extends('layout')
@section('content')



    <div class="card">
    <div class="card-body">
    <h1 class="text-center">All Teacher</h1>
    <p class="alert-success">
                <?php
                  $exception = Session::get('exception');
                  if($exception){
                    echo $exception;
                    Session::put('exception', null);
                  }
                ?>  
              </p>
        <div class="row">
        <div class="col-12">
            <table id="order-listing" class="table table-striped" style="width:100%;">
            <thead>
                <tr>
                    
                    
                    <th>Teacher Name</th>
                    <th>Teacher Phone</th>
                    <th>Gender</th>
                    <th>Dept</th>
                    <th>Salary</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($show_all_teacher as $teacher)
                <tr>
                    <td>{{ $teacher->teacher_name }}</td>
                    <td>{{ $teacher->teacher_phone }}</td>
                    <td>{{ $teacher->teacher_gender }}</td>
                    <td>{{ $teacher->teacher_dept }}</td>
                    <td>{{ $teacher->teacher_salary }}</td> 
                    
                    <td><button class="btn btn-outline-success">View</button></td>
                </tr>
            @endforeach

            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>

@endsection