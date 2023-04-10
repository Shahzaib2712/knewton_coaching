@extends('DashboardLayout.dashboard_layout')

@section('content')
    <div id="content">

        <div class="container">
            <div class="row">
                <div class="col-md-12 my-5">
                    <h2 class=" text-center">Edit Test Details</h2>
                    <form action="{{ url('/test-detail-update') }}/{{$test_detail->studenttest_id}}" method="post" class="my-4">
                        @csrf
                        <div class="row my-3">
                                          <div class="col-md-6">
                                <label for="">Select Student</label>
                                <select class="form-select form-control form-select-lg" name="student_id" id="">
                                    <option value="{{$student[0]->student_id}}">{{ $student[0]->student_name }}</option>
                                    @foreach ($student as $item)
                                        <option value="{{ $item->student_id }}">{{ $item->student_name }}</option>
                                    @endforeach
                                </select>
                                    @error('student_id')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="">Select Test Subject </label>
                                <select class="form-select form-control form-select-lg" name="test_id" id="">
                                    <option value="{{$test[0]->test_id}}">{{ $test[0]->test_title }} </option>
                                    @foreach ($test as $item)
                                        <option value="{{ $item->test_id }}">{{ $item->test_title }}</option>
                                    @endforeach
                                </select>
                                    @error('test_name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                            </div>

                        </div>
                        <div class="row my-3">
                            <div class="col-md-6">
                                <label for="">Select Total Test Marks</label>
                                <select class="form-select form-control form-select-lg" name="test_marks" id="">
                                    <option value="{{$test[0]->test_id}}">{{ $test[0]->test_marks }}</option>
                                    @foreach ($test as $item)
                                        <option value="{{ $item->test_id }}">{{ $item->test_marks}}</option>
                                    @endforeach
                                </select>
                                @error('test_marks')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="">Enter Obtained Marks</label>
                                <input type="number" class="form-control" value="{{$test_detail->obtain_marks}}" name="obtain_marks" id="">
                                @error('obtain_marks')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>  
                        <button type="submit" class="btn btn-primary my-4">Edit Test Details</button>
                       </form>  
                </div>
            </div>
        </div>

      
       
    </div>
    </div>
@endsection
