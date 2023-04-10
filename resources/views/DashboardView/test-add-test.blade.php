@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">

    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <h2 class=" text-center">Add Test</h2>
                <form action="{{url('/test-add-test/store')}}" method="POST" class="my-4">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Test Name:</label>
                            <input type="text" value="{{old('test_title')}}" class="form-control" placeholder="Test Name" name="test_title" id="">
                            @error('test_title')
               				<p class="text-danger">{{ $message }}</p>
           					@enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Test Marks:</label>
                            <input type="text" class="form-control" value="{{old('test_marks')}}" placeholder="Test Marks" name="test_marks" id="">
                            @error('test_marks')
               				<p class="text-danger">{{ $message }}</p>
           					@enderror
                        </div>
                        
                    </div>
                    <button type="submit"  class="btn btn-primary my-3">Add Test</button>
                </form>
            </div>
        </div>
    </div>

</div>


@endsection
