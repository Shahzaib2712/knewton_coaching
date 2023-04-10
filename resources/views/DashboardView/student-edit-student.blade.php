@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">

    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <h2 class=" text-center">Edit Student</h2>
                <form action="{{url('/student-update-student')}}/{{$student->student_id}}" method="POST" class="my-4">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Name" value="{{$student->student_name}}" name="student_name" id="">
                            @error('student_name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Father Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Name" value="{{$student->student_fname}}" name="student_fname" id="">
                            @error('student_fname')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <label for="">Contact:</label>
                            <input type="tel" class="form-control" placeholder="Enter Number" value="{{$student->student_contact}}" name="student_contact" id="">
                            @error('student_contact')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">CNIC:</label>
                            <input type="number" class="form-control" placeholder="Enter CNIC Number" value="{{$student->student_cnic}}" name="student_cnic" id="">
                            @error('student_cnic')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <label for="">Class:</label>
                            <select class="form-select form-control form-select-lg" name="class_id" id="">
                                <option value="{{$student->class_id}}">Select Class</option>
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
                                <option value="{{$student->field_id}}"> Select field </option>
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
                            <input type="email" class="form-control" value="{{$student->student_email}}" placeholder="Enter Email" name="student_email" id="">
                            @error('student_email')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Password:</label>
                            <input type="password" class="form-control" value="{{$student->student_password}}" placeholder="Enter Password" name="student_password" id="">
                            @error('student_password')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="row my-3">
                        <div class="col-md-6 my-4">
            <h3 class="my-3 col-12">Status<hr></h3>
                            @if($student->student_status == '1')
                            <div class="d-flex col-12">
                                <div class="form-check">
                                  <input class="form-check-input" checked type="radio" name="student_status" id="" value="1">
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
                                @else
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="student_status" id="" value="1">
                                  <label class="form-check-label" for="">
                                    Active
                                  </label>
                                </div>
                                <div class="form-check mx-3">
                                  <input class="form-check-input" checked type="radio" name="student_status" id="" value="0">
                                  <label class="form-check-label text-danger" for="">
                                    Inactive
                                  </label>
                                </div>
                                @endif
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
