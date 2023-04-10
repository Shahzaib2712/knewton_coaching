@extends('frontend.layout.main')

@section('container')
    <div class="container my-5">
        <div class="row">
            <h1 class="fw-bold text-center my-5">Announcement</h1>
            @foreach ($announcement as $announce)
            <div class="col-md-4">
                <p class="text-muted">
                    <i class="fa-solid fa-calendar-days"></i>
                    {{($announce->announcement_date)}}
                </p>
                <h5 class="fw-bold">{{($announce->announcement_name)}}</h5>
                <p>{{($announce->announcement_desc)}}</p>
                <a href="{{url('/announcedetails')}}/{{$announce->announcement_id}}" class="btn btn-outline-secondary fw-bold">Learn More...</a>
            </div>
@endforeach
           
        </div>

    </div>

@endsection
