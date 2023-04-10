@extends('frontend.layout.main')

@section('container')
    <div class="container my-5">
        <div class="row">
            <h1 class="fw-bold text-center my-5">Top Rank Students</h1>
            @foreach ($topstudent as $alumnai)
            <div class="col-md-4 my-4 ">
                {{-- <a href="{{url('/web-student')}}"><img src="alumnaiinfo/{{ $alumnai->alumnai_image}}"
                    alt=""></a> --}}
          <img src="{{ asset('public/alumnaiinfo/' . $alumnai->alumnai_image)}}" class="img-fluid rounded w-100" style="cursor: pointer;" alt="">
          <div class="d-flex mt-2">
              <a href="#" class="fw-bold text-decoration-none text-primary">{{$alumnai->field_id}}</a>
              <p class="fw-bold text-decoration-none text-black">&nbsp;&nbsp; | &nbsp;&nbsp;</p>
              <a href="#" class="fw-bold text-decoration-none text-primary">{{($alumnai->alumnai_achivement)}}</a>
              <p class="fw-bold text-decoration-none text-black">&nbsp;&nbsp; | &nbsp;&nbsp;</p>
              <a href="#" class="fw-bold text-decoration-none text-primary">{{($alumnai->alumnai_qualification)}}</a>

          </div>
          <h2 class="m-0 p-0 text-black" style="cursor: pointer;">{{($alumnai->alumnai_name)}}</h2>
      </div>  
      @endforeach
        </div>
    </div>


@endsection    