@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <h2 class=" text-center">Edit Class</h2>
                <form action="{{url('/class-update-class')}}/{{$class[0]->class_id}}" class="my-4" method="post">
					@csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Class:</label>
                            <input type="text" class="form-control" placeholder="Enter Class" name="class_name" value="{{$class[0]->class_name}}">
                        </div>
                    </div>
                    
                    <button class="btn btn-primary mt-4" type="submit">Update Class</button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection