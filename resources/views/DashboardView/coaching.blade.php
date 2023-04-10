@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
  <h1 class="text-center my-4">Coaching</h1>
    <div class="container">
      <a href="{{ url ('/coaching-add-coaching')}}" class="btn btn-primary">Add Coaching</a>
        <div class="row">
            <div class="col-md-12 my-5">
                <div class="table-responsive table-striped">
					<table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Website</th>
                        <th>Address</th>
                        <th>Logo</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
					@foreach ($detail as $item)
                      <tr>
                        <td class="text-nowrap">{{$item->coaching_name}}</td>
                        <td class="text-nowrap">{{$item->coaching_email}}</td>
                        <td class="text-nowrap">{{$item->coaching_contact}}</td>
                        <td class="text-nowrap">{{$item->coaching_web}}</td>
                        <td class="text-nowrap">{{$item->coaching_address}}</td>
                        <td class="text-nowrap"><img src="{{ url('/public/coachinginfo') }}/{{$item->coaching_logo}}" width="50px" alt=""></td>
                        <td class="text-nowrap"><a href="{{ url('/coaching-edit-coaching')}}/{{$item->coaching_id}}"><button class="btn btn-primary">Edit</button></a>
          				<a href="{{ url('/coaching-delete-coaching')}}/{{$item->coaching_id}}"><button class="btn btn-danger">Delete</button></a> </td>          
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