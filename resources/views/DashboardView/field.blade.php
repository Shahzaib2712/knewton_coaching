@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
  <h1 class="text-center my-4">Fields</h1>
    <div class="container">
      <a href="{{ url ('./field-add-field')}}" class="btn btn-primary">Add field</a>
        <div class="row">
            <div class="col-md-12 my-5">
				<div class="table-responsive table-striped">
					<table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>field</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
						@foreach ($data as $item)
                      <tr>
                        <td class="text-nowrap">{{$item->field_name}}</td>
						<td>
							<a href="{{ url('/field-edit-field')}}/{{$item->field_id}}"><button class="btn btn-primary">Edit</button></a>
							<a href="{{ url('/field-delete-field')}}/{{$item->field_id}}"><button class="btn btn-danger">Delete</button></a>           
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