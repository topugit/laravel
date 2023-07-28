@extends('layout')
@section('content')



    <div class="card">
    <div class="card-body">
    <h1 class="text-center">All Student</h1>
        <div class="row">
        <div class="col-12">
            <table id="order-listing" class="table table-striped" style="width:100%;">
            <thead>
                <tr>
                    
                    <th>Student Roll</th>
                    <th>Student Name</th>
                    <th>Father</th>
                    <th>Mother</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Addr</th>
                    <th>Dept</th>
                    <th>Adm Year</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($show_students as $student)
                <tr>
                    <td>{{ $student->std_roll }}</td>
                    <td>{{ $student->std_name }}</td>
                    <td>{{ $student->std_father }}</td>
                    <td>{{ $student->std_mother }}</td>
                    <td>{{ $student->std_email }}</td>
                    <td>{{ $student->std_phone }}</td>
                    <td>{{ $student->std_address }}</td>                    
                    
                    <td>
                        @if( $student->std_department == 1 )
                            {{'CSE'}}
                        @elseif( $student->std_department == 2 )
                            {{'BBA'}}
                        @elseif( $student->std_department == 3 )
                            {{'Pharmacy'}}
                        @else
                            {{'Not Defiend'}}
                        @endif 

                    </td>
                    <td>{{ $student->std_admissionyear }}</td>


                    <td><img src="{{URL::to($student->std_image)}}" height='80' width='80' alt=""></td>
                    <td>
                    <a href="{{URL::to('/singleStudent/'.$student->std_id)}}">
                        <button class="btn btn-outline-success">View</button>
                    </a>
                        <button class="btn btn-outline-primary">Edit</button>

                        <a href="{{URL::to('/student_delete/'.$student->std_id)}}" id="Delete">
                            <button class="btn btn-outline-danger">Delete</button>
                        </a>
                        
                    </td>
                </tr>
            @endforeach

            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>

@endsection