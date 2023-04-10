@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
  <h1 class="text-center my-4">Announcement</h1>
    <div class="container">
      <a href="{{ url ('./announcement-add-announcement')}}" class="btn btn-primary">Add Announcement</a>
        <div class="row">
            <div class="col-md-12 my-5">
				<div class="table-responsive table-striped">
					<table class="table table-bordered">
                    <thead>
                      <tr>
                          <th>Name</th>
                          <th>Description</th>
                          <th>Date</th>
						  <th>Image</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
						@foreach ($data as $item)
							
						<tr>
							<td class="text-nowrap">{{$item->announcement_name}}</td>
							<td class="text-nowrap">{{$item->announcement_desc}}</td>
							<td class="text-nowrap">{{$item->announcement_date}}</td>
							<td><img src="{{ url('/public/announcementinfo') }}/{{$item->announcement_image}}" width="50px" alt=""></td>
							<td>
								<a href="{{ url('/announcement-edit-announcement')}}/{{$item->announcement_id}}"><button class="btn btn-primary">Edit</button></a>
								<a href="{{ url('/announcement-delete-announcement')}}/{{$item->announcement_id}}"><button class="btn btn-danger">Delete</button></a>           
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