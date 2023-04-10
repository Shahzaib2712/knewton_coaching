@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <h2 class=" text-center">Add Faculity</h2>
                <form action="{{url('/faculity-add-faculity/store')}}" method="post" enctype="multipart/form-data" class="my-4">
					@csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Name:</label>
                            <input type="text" class="form-control" value="{{old('faculity_name')}}" placeholder="Enter Name" name="faculity_name" id="">
							@error('faculity_name')
               				<p class="text-danger">{{ $message }}</p>
           					@enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Contact:</label>
                            <input type="tel" class="form-control" value="{{old('faculity_contact')}}" placeholder="Enter Contact" name="faculity_contact" id="">
							@error('faculity_contact')
               				<p class="text-danger">{{ $message }}</p>
           					@enderror
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <label for="">Address:</label>
							<textarea name="faculity_address" value="{{old('faculity_address')}}" id="" cols="30" rows="1" class="form-control" placeholder="Enter Address"></textarea>
							@error('faculity_address')
               				<p class="text-danger">{{ $message }}</p>
           					@enderror
                        </div>
                        <div class="col-md-6">
							<label for="">CNIC</label>
							<input type="text" class="form-control" value="{{old('faculity_cnic')}}" placeholder="Enter CNIC" name="faculity_cnic" id="">
							@error('faculity_cnic')
               				<p class="text-danger">{{ $message }}</p>
           					@enderror
                        </div>
                    </div>
					<div class="row my-3">
						<div class="col-md-6">
							<label for="">Qualification</label>
							<input type="text" class="form-control" value="{{old('faculity_qualification')}}" placeholder="Enter Qualification" name="faculity_qualification" id="">
							@error('faculity_qualification')
               				<p class="text-danger">{{ $message }}</p>
           					@enderror
						</div>
						<div class="col-md-6">
							<label for="">Gender</label><br>
							<label for="male" class="font-weight-bold">Male</label>
                        <input type="radio" name="faculity_gender" value="M" id="male" class="">
						<label for="female" class="font-weight-bold">Female</label>
                        <input type="radio" name="faculity_gender"  value="F" id="female" class="">
						</div>
					</div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <label for="">Joining:</label>
                            <input type="date" class="form-control" placeholder="Select Date" name="faculity_joining" id="">
							@error('faculity_joining')
               				<p class="text-danger">{{ $message }}</p>
           					@enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Image:</label>
                            <input type="file" class="form-control" value="{{old('faculity_image')}}" name="faculity_image" id="">
							@error('faculity_image')
               				<p class="text-danger">{{ $message }}</p>
           					@enderror
                        </div>
                    </div>
                    <div class="row my-3">
						<div class="col-md-6">
							<label for="">CV:</label>
							<input type="file" class="form-control" placeholder="" name="faculity_cv" id="">
							@error('faculity_cv')
							   <p class="text-danger">{{ $message }}</p>
							   @enderror
						</div>
                        <div class="col-md-6">
                            <label for="">Email:</label>
                            <input type="email" class="form-control" placeholder="Enter Email" name="faculity_email" id="">
							@error('faculity_email')
               				<p class="text-danger">{{ $message }}</p>
           					@enderror
                        </div>
                    </div>
                    <div class="row my-3">
						<div class="col-md-6">
							<label for="">Password:</label>
							<input type="password" class="form-control" placeholder="Enter Password" name="faculity_password" id="">
							@error('faculity_password')
							   <p class="text-danger">{{ $message }}</p>
							   @enderror
						</div>
                        <div class="col-md-6">
                            <label for="">Status:</label><br>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="faculity_status" id="" value="1">
								<label class="form-check-label" for="">
								  Active
								</label>
							  </div>
							  <div class="form-check mx-3">
								<input class="form-check-input" type="radio" name="faculity_status" id="" value="0">
								<label class="form-check-label text-danger" for="">
								  Inactive
								</label>
							  </div>
							@error('faculity_status')
               				<p class="text-danger">{{ $message }}</p>
           					@enderror
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary my-4">Add Faculity</button>
                </form>
            </div>
        </div>
    </div>

</div>







@endsection