@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">

    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <h2 class=" text-center">Add Student</h2>
                <form action="{{url('/student-add-student/store')}}" method="post" class="my-4">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Name:</label>
                            <input type="text" class="form-control" value="{{old('student_name')}}" placeholder="Enter Name" name="student_name" id="">
                            @error('student_name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Father Name:</label>
                            <input type="text" class="form-control" value="{{old('student_fname')}}" placeholder="Enter Name" name="student_fname" id="">
                            @error('student_fname')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <label for="">Contact:</label>
                            <input type="tel" class="form-control" value="{{old('student_contact')}}" placeholder="Enter Number" name="student_contact" id="">
                            @error('student_contact')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">CNIC:</label>
                            <input type="number" class="form-control" value="{{old('student_cnic')}}" placeholder="Enter CNIC Number" name="student_cnic" id="">
                            @error('student_cnic')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <label for="">Class:</label>
                            <select class="form-select form-control form-select-lg" name="class_id" id="">
                                <option value="">Select Class</option>
                      @foreach ($class as $item)
                      <option value="{{$item->class_id}}">{{$item->class_name}}</option>
                      @endforeach
                              </select>
                              @error('class')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Field:</label>
                            <select class="form-select form-control form-select-lg" name="field_id" id="">
                                <option value=""> Select field </option>
                      @foreach ($field as $item)
                      <option value="{{$item->field_id}}">{{$item->field_name}}</option>
                      @endforeach
                              </select>
                              @error('field')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                     
                    </div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <label for="">Email:</label>
                            <input type="email" class="form-control" value="{{old('student_email')}}" placeholder="Enter Email" name="student_email" id="">
                            @error('student_email')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Password:</label>
                            <input type="password" class="form-control" value="{{old('student_password')}}" placeholder="Enter Password" name="student_password" id="">
                            @error('student_password')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="row my-3">
                        <div class="col-md-6 my-4">
                        <div class="d-flex col-12">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="student_status" id="" value="1">
                              <label class="form-check-label" for="">
                                Active
                              </label>
                            </div>
                            <div class="form-check mx-3">
                              <input class="form-check-input" type="radio" name="student_status" id="" value="0">
                              <label class="form-check-label text-danger" for="">
                                Inactive
                              </label>
                            </div>
                          </div>
                    </div>
                </div>
                </div>
                    
                    <button type="submit" class="btn btn-primary my-4">Add Student</button>
                </form>
            </div>
        </div>
    </div>



</div>


@endsection
