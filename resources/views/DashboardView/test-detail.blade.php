@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
  <h1 class="text-center my-4">Test</h1>
    <div class="container">
      <a href="{{ url ('./test-detail-add')}}" class="btn btn-primary">Add Student Test Details</a>
        <div class="row">
            <div class="col-md-12 my-5">
				<div class="table-responsive table-striped">
					<table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Test Detail ID</th>
                        <th>Student </th>
                        <th>Test </th>
                        <th>Total Marks</th>
                        <th>Obtained Marks</th>
                        <th>Action </th>
                      </tr>
                    </thead>
                    <tbody> 
                      @foreach ($student as $item)
                      <tr>
                       
                        <td class="text-nowrap">{{$item->studenttest_id}}</td>
                        <td class="text-nowrap">{{$item->student_id}}</td>
                        <td class="text-nowrap">{{$item->test_id}}</td>
                        <td class="text-nowrap">{{$item->test_marks}}</td>
                        <td class="text-nowrap">{{$item->obtain_marks}}</td>
                        <td>
                          <a href="{{ url('/test-detail-edit')}}/{{$item->studenttest_id}}"><button class="btn btn-primary">Edit</button></a>
                          <a href="{{ url('/test-detail-delete')}}/{{$item->studenttest_id}}"><button class="btn btn-danger">Delete</button></a>           
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