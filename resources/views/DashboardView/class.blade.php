@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
  <h1 class="text-center my-4">Classes</h1>
    <div class="container">
      <a href="{{ url ('./class-add-class')}}" class="btn btn-primary">Add Class</a>
        <div class="row">
            <div class="col-md-12 my-5">
				<div class="table-responsive table-striped">
					<table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
						@foreach ($data as $item)
							
						<tr>
							<td class="text-nowrap">{{$item->class_name}}</td>
							<td>
								<a href="{{ url('/class-edit-class')}}/{{$item->class_id}}"><button class="btn btn-primary">Edit</button></a>
								<a href="{{ url('/class-delete-class')}}/{{$item->class_id}}"><button class="btn btn-danger">Delete</button></a>           
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