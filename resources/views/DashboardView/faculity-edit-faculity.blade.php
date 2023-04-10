@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <h2 class=" text-center">Edit Faculity</h2>
                <form action="{{url('/faculity-update-faculity')}}/{{$faculity->faculity_id}}" method="POST" enctype="multipart/form-data" class="my-4">
					@csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Name:</label>
                            <input type="text" class="form-control" value="{{ $faculity->faculity_name }}" placeholder="Enter Name" name="faculity_name" id="">
							@error('faculity_name')
               				<p class="text-danger">{{ $message }}</p>
           					@enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Contact:</label>
                            <input type="tel" class="form-control" value="{{ $faculity->faculity_contact }}" placeholder="Enter Contact" name="faculity_contact" id="">
							@error('faculity_contact')
               				<p class="text-danger">{{ $message }}</p>
           					@enderror
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <label for="">Address:</label>
							<textarea name="faculity_address" id="" cols="30" rows="1" class="form-control" placeholder="Enter Address">{{ $faculity->faculity_address }}</textarea>
							@error('faculity_address')
               				<p class="text-danger">{{ $message }}</p>
           					@enderror
                        </div>
                        <div class="col-md-6">
							<label for="">CNIC</label>
							<input type="text" class="form-control" value="{{ $faculity->faculity_cnic }}" placeholder="Enter CNIC" name="faculity_cnic" id="">
							@error('faculity_cnic')
               				<p class="text-danger">{{ $message }}</p>
           					@enderror
                        </div>
                    </div>
					<div class="row my-3">
						<div class="col-md-6">
							<label for="">Qualification</label>
							<input type="text" class="form-control" value="{{ $faculity->faculity_qualification }}" placeholder="Enter Qualification" name="faculity_qualification" id="">
							@error('faculity_qualification')
               				<p class="text-danger">{{ $message }}</p>
           					@enderror
						</div>
						<div class="col-md-6">
							<label for="">Gender</label><br>
                            @if($faculity->faculity_gender == 'M')
                            <div class="form-group m-2">
                                  <label for="male" class="font-weight-bold">Male</label>
                                  <input type="radio" class="ml-2" name="faculity_gender" checked value="M" id="male" class="">
                              </div>
                              <div class="form-group m-2">
                                  <label for="female" class="font-weight-bold">Female</label>
                                  <input type="radio" class="ml-2" name="faculity_gender"  value="F" id="female" class="">
                              </div>
                              @else
                              <div class="form-group m-2">
                                  <label for="male" class="font-weight-bold">Male</label>
                                  <input type="radio" class="ml-2" name="faculity_gender" value="M" id="male" class="">
                              </div>
                              <div class="form-group m-2">
                                  <label for="female" class="font-weight-bold">Female</label>
                                  <input type="radio" class="ml-2" name="faculity_gender" checked  value="F" id="female" class="">
                              </div>
                            @endif
						</div>
					</div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <label for="">Joining:</label>
                            <input type="date" class="form-control" value="{{ $faculity->faculity_joining }}" placeholder="Select Date" name="faculity_joining" id="">
							@error('faculity_joining')
               				<p class="text-danger">{{ $message }}</p>
           					@enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Image:</label>
                            <input type="file" name="faculity_image" id="" class="form-control " placeholder="" aria-describedby="helpId">
                    <br>
                    <img src="{{ url('/public/faculityinfo')}}/{{$faculity->faculity_image}}" width="50px" alt="">
                <input type="hidden"  name="oldimg" value="{{$faculity->faculity_image}}" >
							@error('faculity_image')
               				<p class="text-danger">{{ $message }}</p>
           					@enderror
                        </div>
                    </div>
                    <div class="row my-3">
						<div class="col-md-6">
							<label for="">CV:</label>
							<input type="file" name="faculity_cv" accept="pdf" id="" class="form-control " placeholder="" aria-describedby="helpId">
                    <br>
                <a class="h6 font-weight-bold" href="{{url('/public/faculityinfo')}}/{{$faculity->faculity_cv}}" target="_blank">See CV</a>
                    <input type="hidden"  name="oldcv" value="{{$faculity->faculity_cv}}" >

							@error('faculity_cv')
							   <p class="text-danger">{{ $message }}</p>
							   @enderror
						</div>
                        <div class="col-md-6">
                            <label for="">Email:</label>
                            <input type="email" class="form-control" value="{{ $faculity->faculity_email }}" placeholder="Enter Email" name="faculity_email" id="">
							@error('faculity_email')
               				<p class="text-danger">{{ $message }}</p>
           					@enderror
                        </div>
                    </div>
                    <div class="row my-3">
						<div class="col-md-6">
							<label for="">Password:</label>
							<input type="password" class="form-control" placeholder="Enter Password" value="{{ $faculity->faculity_password }}" name="faculity_password" id="">
							@error('faculity_password')
							   <p class="text-danger">{{ $message }}</p>
							   @enderror
						</div>
                        <div class="col-md-6">
                            <label for="">Status:</label>
							@if($faculity->faculity_status == '1')
            <div class="d-flex col-12">
                <div class="form-check">
                  <input class="form-check-input" checked type="radio" name="faculity_status" id="" value="1">
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
                @else
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="faculity_status" id="" value="1">
                  <label class="form-check-label" for="">
                    Active
                  </label>
                </div>
                <div class="form-check mx-3">
                  <input class="form-check-input" checked type="radio" name="faculity_status" id="" value="0">
                  <label class="form-check-label text-danger" for="">
                    Inactive
                  </label>
                </div>
                @endif
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary my-4">Edit Faculity</button>
                </form>
            </div>
        </div>
    </div>

</div>






@endsection