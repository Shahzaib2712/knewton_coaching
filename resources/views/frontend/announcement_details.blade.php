@extends('frontend.layout.main')

@section('container')
    <div class="container my-5">
        <div class="row">
            <h1 class="fw-bold text-center my-5">Announcement Detail</h1>
            @foreach ($announcedetails as $details)
                
            <div class="col-md-5">
              {{-- <img src="{{ asset('public/announcementinfo/' . $alumnai->announcement_image)}}" class="img-fluid rounded" alt=""> --}}
            </div>
            <div class="col-md-7">
                <h2>{{($details->announcement_name)}}</h2>
                <p class="my-5">{{($details->announcement_desc)}}</p>
                <p class="text-muted">
                    <i class="fa-solid fa-calendar-days"></i>
                    {{($details->announcement_date)}}
                </p>
            </div>
            @endforeach
        </div>
    </div>

@endsection