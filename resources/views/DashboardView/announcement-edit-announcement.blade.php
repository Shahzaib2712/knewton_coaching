@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <h2 class=" text-center">Edit Announcement</h2>
                <form action="{{url('/announcement-update-announcement')}}/{{ $data->announcement_id }}" method="post" enctype="multipart/form-data" class="my-4">
					@csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Announcement:</label>
                            <input type="text" class="form-control" value="{{ $data->announcement_name }}" placeholder="Enter Announcement" name="announcement_name" id="">
							@error('announcement_name')
                   			<p class="text-danger">{{ $message }}</p>
                			@enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Description:</label>
                            <textarea name="announcement_desc" id="" class="form-control" placeholder="Description" cols="30" rows="1">{{ $data->announcement_desc }}</textarea>
							@error('announcement_desc')
                   			<p class="text-danger">{{ $message }}</p>
                			@enderror
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-md-6">
                            <label for="">Date:</label>
                            <input type="date" placeholder="Enter Date" value="{{ $data->announcement_date }}" class="form-control" name="announcement_date" id="">
							@error('announcement_date')
                   			<p class="text-danger">{{ $message }}</p>
                			@enderror
                        </div>
						<div class="col-md-6">
							<label for="">Upload Image</label>
							<input type="file" name="announcement_image"  class="form-control" >
							<img src="{{ url('/public/announcementinfo')}}/{{$data->announcement_image }}" width="50px" alt="">
             			    <input type="hidden"  name="oldimage" value="{{$data->announcement_image}}" >
							@error('announcement_image')
                   			<p class="text-danger">{{ $message }}</p>
                			@enderror
						</div>
                    </div>
                    <button type="submit" class="btn btn-primary ">Update Announcement</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection