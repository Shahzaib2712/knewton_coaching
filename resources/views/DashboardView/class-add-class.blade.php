@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <h2 class=" text-center">Add Class</h2>
                <form action="{{url('/class-add-class/store')}}" method="post" class="my-4">
					@csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Class:</label>
                            <input type="text" class="form-control" value="{{old('class_name')}}" placeholder="Enter Class" name="class_name" id="">
							@error('class_name')
        					<p class="text-danger">{{$message}}</p>
      						@enderror
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-4" >Add New Class</button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection