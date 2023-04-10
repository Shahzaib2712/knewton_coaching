@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <h2 class=" text-center">Add Subject</h2>
                <form action="{{url('/subject-add-subject/store')}}" method="post" class="my-4">
					@csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Subject:</label>
                            <input type="text" class="form-control" value="{{old('subject_name')}}" placeholder="Enter Subject" name="subject_name" id="">
							@error('subject_name')
        					<p class="text-danger">{{$message}}</p>
      						@enderror
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-4" >Add New Subject</button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection