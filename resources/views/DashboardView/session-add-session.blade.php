@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <h2 class=" text-center">Add Session</h2>
                <form action="{{url('/session-add-session/store')}}" method="post" class="my-4">
					@csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Session:</label>
                            <input type="text" value="{{old('session_name')}}" class="form-control" placeholder="Enter session" name="session_name" id="">
							@error('session_name')
        					<p class="text-danger">{{$message}}</p>
      						@enderror
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-4" >Add New Session</button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection