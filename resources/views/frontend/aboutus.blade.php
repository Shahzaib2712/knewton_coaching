@extends('frontend.layout.main')

@section('container')

    <div class="bg-primary">
    <div class="container my-5">
            <div class="row">
                <div class="col-md-6 my-5">
                    <h1 class="text-white my-5" style="font-size: 60px;">Marketing research for your business.</h1>
                    <p class="text-white fs-4">Lorem ipsum dolor sit amet consectetur!</p>
                    <button class="btn btn-outline-light btn-lg rounded-pill">Get Started</button>
                </div>
                <div class="col-md-6 my-5">
                    <img src="./Img/std.jpg" class="img-fluid w-100" alt="">
                </div>
            </div>
        </div>
    </div><br><br><br>
    <div style="background-color: aliceblue;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card border-primary mb-3 my-5">
                    <div class="card-body text-primary">
                      <h5 class="card-title">Our Mission</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
            </div>
            <div class="col-md-6">
                <div class="card border-primary mb-3 my-5">
                    <div class="card-body text-primary">
                      <h5 class="card-title">Our Vission</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
            </div>
        </div>
    </div><br>
</div>
<br><br><br><br><br>

@endsection