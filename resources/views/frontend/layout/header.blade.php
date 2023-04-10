<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet"
        type="text/css" />

</head>
<style>
    .navbar .navbar-nav .nav-link {
  color: #ffffff;
}
.sm-icons {
  flex-direction: row;
}
.sm-icons .nav-link {
  padding-right: 1em;
}
</style>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold" href="{{url('/home')}}">Knewton Coaching Center</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/home')}}">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{url('announce')}}">Announcement</a>
                 
              </li>
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{url('/web-student')}}">Top Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/teacher')}}">Our Teachers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{url('/aboutus')}}">About Us</a>
                </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/contact')}}">Contact Us</a>
              </li>
             

              <li class="nav-item">
                  @if (session()->has('useremail'))

                  <li class="nav-link active">
                     <a class="font-weight-bold text-white">{{session()->get('useremail')}}</a>
                  </li>

                  <li class="nav-link active">
                 <a href="{{url('/user/logout')}}" class="font-weight-bold text-white">Logout</a> 
                  </li>
                  @else
                  <li class="nav-link active">
                  <a class="nav-link active" aria-current="page" class="font-weight-bold text-white" href="{{url('/userlogin')}}">Login</a>
                  </li>
                  <li class="nav-link active">
                    <a class="nav-link active" aria-current="page" class="font-weight-bold text-white" href="{{url('/userregister')}}">Register</a>
                  </li>
                  @endif
                </li>
            </ul>
           
          </div>
        </div>
      </nav> 



</body>
</html>

