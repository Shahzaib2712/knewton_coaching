@extends('frontend.layout.main')

@section('container')
    <div style="background-color: aliceblue; height: 100%;">
        <div class="container my-5">
            <div class="row">
                <h3 style="font-size: 40px;" class="text-center my-5">Qualified<span class="fw-bold"> Teachers.</span></h3>
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
            
        </div>
    </div>

@endsection