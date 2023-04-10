@extends('frontend.layout.main')

@section('container')

<div class="container" style="margin-top: 120px;">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <!-- Section: Design Block -->
<section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>

  <!-- Jumbotron -->
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5 text-center">
            <h2 class="fw-bold mb-5">Login now</h2>
            <form action="{{url('/userloginstore')}}" method="GET" enctype="multipart/form-data">
              <div class="form-outline mb-4">
                <input type="email" id="form3Example3" name="useremail" class="form-control" placeholder="Email Address" />
                @error('useremail')
                <p class="text-danger">{{$message}}</p> 
                @enderror
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control" name="userpassword" placeholder="Password" />
                @error('userpassword')
                <p class="text-danger">{{$message}}</p> 
                @enderror
              </div>
              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">
                Login
              </button>

            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-5">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="w-100 rounded-4 shadow-4 d-md-block d-none"
          alt="" />
      </div>
    </div>
  </div>
</section>
    </div>
    <div class="col-md-2"></div>
  </div>
</div><br><br><br><br><br>
@endsection