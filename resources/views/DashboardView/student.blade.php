@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
  <h1 class="text-center my-4">Students</h1>
    <div class="container">
      <a href="{{url('./student-add-student')}}" class="btn btn-primary">Add Student</a>
        <div class="row">
			<div class="col-md-12 my-5">
				<div class="table-responsive table-striped">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>F/Name</th>
                        <th>Contact</th>
                        <th>CNIC</th>
                        <th>Class</th>
                        <th>Field</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($student as $item)
                      <tr>
                        <td class="text-nowrap">{{$item->student_name}}</th>
                        <td class="text-nowrap">{{$item->student_fname}}</td>
                        <td class="text-nowrap">{{$item->student_contact}}</td>
                        <td class="text-nowrap">{{$item->student_cnic}}</td>
                        <td class="text-nowrap">{{$item->class_id}}</td>
                        <td class="text-nowrap">{{$item->field_id}}</td>
                        <td class="text-nowrap">{{$item->student_email}}</td>
                        <td class="text-nowrap">{{$item->student_password}}</td>
                        <td class="text-nowrap">
                          @if ($item->student_status == 1)
                    <span class="badge badge-primary">Active</span>
            
                    @else
                    <span class="badge badge-danger">InActive</span>
            
                  @endif
                        </td>
                        <td class="text-nowrap">
                          <a href="{{ url('/student-edit-student')}}/{{$item->student_id}}"><button class="btn btn-primary">Edit</button></a>
                          <a href="{{ url('/student-delete-student')}}/{{$item->student_id}}"><button class="btn btn-danger">Delete</button></a>           
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
				</table>
            </div>
		</div>
        </div>
    </div>

</div>







@endsection