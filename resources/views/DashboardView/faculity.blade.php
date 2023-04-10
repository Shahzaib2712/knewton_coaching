@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
  <h1 class="text-center my-4">Faculity</h1>
  <div class="container">
      <a href="{{ url ('./faculity-add-faculity')}}" class="btn btn-primary">Add Faculity</a>
        <div class="row">
            <div class="col-md-12 my-5">
				<div class="table-responsive table-striped">
					<table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>CNIC</th>
                        <th>Qualification</th>
                        <th>Gender</th>
                        <th>Joining</th>
                        <th>Image</th>
                        <th>CV</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
						@foreach ($data as $item)
                      <tr>
                        <td class="text-nowrap">{{$item->faculity_name}}</td>
                        <td class="text-nowrap">{{$item->faculity_contact}}</td>
                        <td class="text-nowrap">{{$item->faculity_address}}</td>
                        <td class="text-nowrap">{{$item->faculity_cnic}}</td>
                        <td class="text-nowrap">{{$item->faculity_qualification}}</td>
                        <td class="text-nowrap">{{$item->faculity_gender}}</td>
                        <td class="text-nowrap">{{$item->faculity_joining}}</td>
						<td class="text-nowrap"><img src="{{ url('/public/faculityinfo') }}/{{$item->faculity_image}}" width="50px" alt=""></td>
						<td class="text-nowrap"><a href="{{ url('/public/faculityinfo')}}/{{$item->faculity_cv}}" target="_blank">CV</a></td>
                        <td class="text-nowrap">{{$item->faculity_email}}</td>
                        <td class="text-nowrap">{{$item->faculity_password}}</td>
                        <td class="text-nowrap">
							@if ($item->faculity_status == 1)
        <span class="badge badge-primary">Active</span>

        @else
        <span class="badge badge-danger">InActive</span>

      @endif
						</td>
						<td class="text-nowrap">
							<a href="{{ url('/faculity-edit-faculity')}}/{{$item->faculity_id}}"><button class="btn btn-primary">Edit</button></a>
							<a href="{{ url('/faculity-delete-faculity')}}/{{$item->faculity_id}}"><button class="btn btn-danger">Delete</button></a>           
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