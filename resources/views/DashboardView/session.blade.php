@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
				<div class="table-responsive table-striped">
					<table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Session</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
						@foreach ($data as $item)
                      <tr>
                        <td class="text-nowrap">{{$item->session_name}}</td>
						<td>
							<a href="{{ url('/session-edit-session')}}/{{$item->session_id}}"><button class="btn btn-primary">Edit</button></a>
							<a href="{{ url('/session-delete-session')}}/{{$item->session_id}}"><button class="btn btn-danger">Delete</button></a>           
						  </td>
                      </tr>
					  @endforeach
                      <a href="{{ url ('./session-add-session')}}" class="btn btn-primary my-5">Add session</a>
                    </tbody>
                  </table>
				  </div>
            </div>
        </div>
    </div>

</div>




@endsection