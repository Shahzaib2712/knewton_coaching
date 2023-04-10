@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <h2 class=" text-center">Add Announcement</h2>
                <form action="{{url('/announcement-add-announcement/store')}}" enctype="multipart/form-data" method="post" class="my-4">
					@csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Announcement:</label>
                            <input type="text" class="form-control" value="{{old('announcement_name')}}" placeholder="Enter Announcement" name="announcement_name" id="">
							@error('announcement_name')
        					<p class="text-danger">{{$message}}</p>
      						@enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Description:</label>
                            <textarea name="announcement_desc" value="{{old('announcement_desc')}}" class="form-control" placeholder="Description" cols="30" rows="1"></textarea>
							@error('announcement_desc')
        					<p class="text-danger">{{$message}}</p>
      						@enderror
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-md-6">
                            <label for="">Date:</label>
                            <input type="date" placeholder="Enter Date" value="{{old('announcement_date')}}" class="form-control" name="announcement_date" id="">
							@error('announcement_date')
        					<p class="text-danger">{{$message}}</p>
      						@enderror
                        </div>
                        <div class="col-md-6">
							<label for="">Upload Image</label>
							<input type="file" class="form-control" value="{{old('announcement_image')}}" name="announcement_image" id="">
							@error('announcement_image')
        					<p class="text-danger">{{$message}}</p>
      						@enderror
						</div>
                    </div>
					<button type="submit" class="btn btn-primary mt-4" >Add New Announcement</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection