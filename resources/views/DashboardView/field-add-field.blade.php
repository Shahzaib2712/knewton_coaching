@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <h2 class=" text-center">Add field</h2>
                <form action="{{url('/field-add-field/store')}}" method="post" class="my-4" enctype="multipart/form-data">
					@csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">field:</label>
                            <input type="text" value="{{old('field_name')}}" class="form-control" placeholder="Enter field" name="field_name" id="">
							@error('field_name')
        					<p class="text-danger">{{$message}}</p>
      						@enderror
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-4" >Add New field</button>
                </form>
            </div>
        </div>
    </div>

</div>





@endsection