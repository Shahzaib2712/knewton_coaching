@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
  <h1 class="text-center my-4">Test</h1>
    <div class="container">
      <a href="{{ url ('./test-add-test')}}" class="btn btn-primary">Add Test</a>
        <div class="row">
            <div class="col-md-12 my-5">
				<div class="table-responsive table-striped">
					<table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Test</th>
                        <th>Marks</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @foreach ($test as $item)
                        <td class="text-nowrap">{{$item->test_title}}</td>
                        <td class="text-nowrap">{{$item->test_marks}}</td>
                        <td>
                          <a href="{{ url('/test-edit-test')}}/{{$item->test_id}}"><button class="btn btn-primary">Edit</button></a>
                          <a href="{{ url('/test-delete-test')}}/{{$item->test_id}}"><button class="btn btn-danger">Delete</button></a>           
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