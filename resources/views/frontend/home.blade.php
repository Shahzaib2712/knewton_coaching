@extends('frontend.layout.main');

@section('container');

    <!-- Carousel Slider -->
    <div class="container my-5 p-5">
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{url('public/Img/std.jpg')}}" class="d-block w-100" height="500px" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{url('public/Img/std.jpg')}}" class="d-block w-100" height="500px" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{url('public/Img/std.jpg')}}" class="d-block w-100" height="500px" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Top Rank Students -->
    <div class="container my-5">
        <div class="row">
            <p class="text-muted" style="font-size: 20px;">Our Best Students</p>
            <h3 style="font-size: 40px;" class="text-black">Top Rank <span class="fw-bold">Students.</span></h3>
            @foreach ($topstudent as $alumnai)
                  <div class="col-md-4 my-4 ">
                <img src="{{ asset('public/alumnaiinfo/' . $alumnai->alumnai_image)}}" class="img-fluid rounded"  width="400px" style="cursor: pointer;" alt="">
                <div class="d-flex mt-2">
                    <a href="#" class="fw-bold text-decoration-none text-primary">{{($alumnai->field_id)}}</a>
                    <p class="fw-bold text-decoration-none text-black">&nbsp;&nbsp; | &nbsp;&nbsp;</p>
                    <a href="#" class="fw-bold text-decoration-none text-primary">{{($alumnai->alumnai_achivement)}}</a>
                    <p class="fw-bold text-decoration-none text-black">&nbsp;&nbsp; | &nbsp;&nbsp;</p>
                    <a href="#" class="fw-bold text-decoration-none text-primary">{{($alumnai->alumnai_qualification)}}</a>

                </div>
                <h2 class="m-0 p-0 text-black" style="cursor: pointer;">{{($alumnai->alumnai_name)}}</h2>
            </div>  
            @endforeach
              
           
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <a class="btn btn-primary btn-lg" href="{{url('/web-student')}}">More Students...</a>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>


    <!-- Register & About us -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="p-3"
                    style="background-image: url(https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bGlicmFyeXxlbnwwfHwwfHw%3D&w=1000&q=80); background-position: center; background-repeat: no-repeat; background-size: cover;">
                    <h2 class="text-center text-white">Get a<span class="fw-bold"> Free<br>Registration.</span></h2>
                    <p class="text-center text-white">More Than 122K Online Available Courses</p>
                    <form action="datainsert" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" class="form-control my-3" placeholder="Your Name" name="user_name" value="{{old('user_name')}}" id="">   
                            @error('user_name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        <input type="tel" class="form-control my-3" placeholder="Your Number" value="{{old('user_contact')}}" name="user_contact" id="">
                        @error('user_contact')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input type="email" class="form-control my-3" placeholder="Your Email" value="{{old('user_email')}}" name="user_email" id="">
                        @error('user_email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input type="date" class="form-control my-3" name="user_date" value="{{old('user_date')}}" id="">
                        @error('user_date')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <textarea name="user_message" id="" cols="30" rows="3" value="{{old('user_message')}}" class="form-control my-3"
                            placeholder="Message"></textarea>
                        @error('user_message')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <button type="submit" class="btn btn-primary w-100 btn-lg my-1">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <p class="text-muted" style="font-size: 20px;">SORT ABOUT US</p>
                <h3 style="font-size: 40px;" class="text-black">We are <span class="fw-bold">Knewton Coaching
                        Center</span><br> Work Since 2005</h3>
                <h5 class="my-4 text-black">We take our mission of increasing global access to quality education
                    seriously. We connect learners to the best universities and institutions from around the world.</h5>
                <p class="text-primary">__________</p>
                <p> </p>
                <h6 class="text-black my-2">We take our mission of increasing global access to quality education
                    seriously. We connect learners to the best universities and institutions from around the world.</h6>
                <br>
                <p class="text-black fw-bold my-3"><i class="fa-solid fa-circle text-primary"
                        style="font-size: 15px;"></i> Professional And Experienced Since 1980</p>
                <p class="text-black fw-bold my-3"><i class="fa-solid fa-circle text-primary"
                        style="font-size: 15px;"></i> We Connect Learners To The Best Universities From Around The World
                </p>
                <p class="text-black fw-bold my-3"><i class="fa-solid fa-circle text-primary"
                        style="font-size: 15px;"></i> Our Mission Increasing Global Access To Quality Aducation</p>
                <p class="text-black fw-bold my-3"><i class="fa-solid fa-circle text-primary"
                        style="font-size: 15px;"></i> 100K Online Available Courses</p>
                <button class="btn btn-primary btn-lg me-3">About Us</button>
                <button class="btn btn-primary btn-lg">Contact Us</button>
            </div>
        </div>
    </div>


    <!-- Search Course -->
    <div style="background-color: #0c67a0;" class="mt-5">
        <div class="container">

            <br>
            <div class="row">
                <div class="col-md-1">
                    <i class="fa-solid fa-graduation-cap text-white my-2" style="font-size: 60px;"></i>
                </div>
                <div class="col-md-2">
                    <h1 class="text-white fw-bold m-0">5M+</h1>
                    <p class="text-white fw-bold">Students Enrolled</p>
                </div>
                <div class="col-md-1">
                    <i class="fa-solid fa-book text-white my-2" style="font-size: 60px;"></i>
                </div>
                <div class="col-md-2">
                    <h1 class="text-white fw-bold m-0">5M+</h1>
                    <p class="text-white fw-bold">Students Enrolled</p>
                </div>
                <div class="col-md-1">
                    <i class="fa-duotone fa-star-shooting text-white my-2" style="font-size: 60px;"></i>
                </div>
                <div class="col-md-2">
                    <h1 class="text-white fw-bold m-0">5M+</h1>
                    <p class="text-white fw-bold">Students Enrolled</p>
                </div>
                <div class="col-md-1">
                    <i class="fa-solid fa-user-tie text-white my-2" style="font-size: 60px;"></i>
                </div>
                <div class="col-md-2">
                    <h1 class="text-white fw-bold m-0">5M+</h1>
                    <p class="text-white fw-bold">Students Enrolled</p>
                </div>
            </div>
        </div>
        <br>
    </div>


    <!-- Announcement -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-4">
                <h2>Latest <span class="fw-bold">Announcement.</span></h2>
                <p class="text-primary">__________</p>

                <hr>
                <div class="row">
                    @foreach ($announcement as $announce)
                    <div class="col-md-4">
                        <p class="text-muted">
                            <i class="fa-solid fa-calendar-days"></i>
                            {{($announce->announcement_date)}}
                        </p>
                        <h5 class="fw-bold">{{($announce->announcement_name)}}</h5>
                        <p>{{($announce->announcement_desc)}}</p>
                        <a href="{{url('/announce-details')}}" class="btn btn-outline-secondary fw-bold">Learn More...</a>
                    </div>
@endforeach
                </div>
                <hr>
                <a href="{{url('/announce')}}" class="fw-bold text-decoration-none text-primary">View All Announcements <i
                        class="fa-solid fa-arrow-up-right-from-square text-primary"></i></a></i>
            </div>

        </div>
    </div>


    <!-- Best Notes & Books
    <div class="container">
        <div class="row">
            <h3 style="font-size: 40px;" class="text-black">Our <span class="fw-bold">Best Products.</span></h3>    
            <p class="text-primary">__________</p>
            <div class="col-md-3">
                <div style="background-color: aliceblue; cursor: pointer;" class="p-3">
                    <img src="https://i0.wp.com/bookstudio.lk/wp-content/uploads/2021/12/Rathna-CR-Single-Hard-Cover-360.png?fit=600%2C600&ssl=1" class="img-fluid" alt="">
                    <h5 class="mt-3">Mobile App Books</h5>
                    <div class="d-flex">
                        <p class="text-muted fw-bold">Start From <span class="text-primary">30$</span></p>
                        </div>
                </div>
            </div>
            <div class="col-md-3">
                <div style="background-color: aliceblue; cursor: pointer;" class="p-3">
                    <img src="https://i0.wp.com/bookstudio.lk/wp-content/uploads/2021/12/Rathna-CR-Single-Hard-Cover-360.png?fit=600%2C600&ssl=1" class="img-fluid" alt="">
                    <h5 class="mt-3">Mobile App Books</h5>
                    <div class="d-flex">
                        <p class="text-muted fw-bold">Start From <span class="text-primary">30$</span></p>
                        </div>
                </div>
            </div>
            <div class="col-md-3">
                <div style="background-color: aliceblue; cursor: pointer;" class="p-3">
                    <img src="https://i0.wp.com/bookstudio.lk/wp-content/uploads/2021/12/Rathna-CR-Single-Hard-Cover-360.png?fit=600%2C600&ssl=1" class="img-fluid" alt="">
                    <h5 class="mt-3">Mobile App Books</h5>
                    <div class="d-flex">
                        <p class="text-muted fw-bold">Start From <span class="text-primary">30$</span></p>
                        </div>
                </div>
            </div>
            <div class="col-md-3">
                <div style="background-color: aliceblue; cursor: pointer;" class="p-3">
                    <img src="https://i0.wp.com/bookstudio.lk/wp-content/uploads/2021/12/Rathna-CR-Single-Hard-Cover-360.png?fit=600%2C600&ssl=1" class="img-fluid" alt="">
                    <h5 class="mt-3">Mobile App Books</h5>
                    <div class="d-flex">
                        <p class="text-muted fw-bold">Start From <span class="text-primary">30$</span></p>
                        </div>
                </div>
            </div>
        </div>
        <br>
    </div> -->

    <!-- Student Testimonial -->


    <!-- Staff -->
    <div style="background-color: aliceblue;">
        <div class="container">
            <div class="row">
                <p class="mt-5" style="font-size: 20px;">GENIUS Staff</p>
                <h3 style="font-size: 40px;">Genius<span class="fw-bold"> Teachers.</span></h3>
                @foreach ($faculity as $teacher)
                <div class="col-md-3">
                    <div class="card p-3 text-center border-0">
                        <img src="{{ asset('public/faculityinfo/' . $teacher->faculity_image)}}" class="img-fluid text-center" alt="">
                        <h5 class="text-black my-3" style="cursor: pointer;">{{($teacher->faculity_name)}}</h5>
                        <p class="text-primary" style="cursor: pointer;">{{($teacher->faculity_qualification)}}</p>
                    </div>
                </div>
                @endforeach
   
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 text-center my-5">
                    <a href="{{url('/teacher')}}" class="btn btn-primary btn-lg">All Teachers...</a>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div><br>
    </div>

@endsection
