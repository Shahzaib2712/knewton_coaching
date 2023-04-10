@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">

	
	<div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <h2 class=" text-center">Add Alumnai</h2>
                <form action="{{url('/alumnai-add-alumnai/store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Alumnai Name:</label>
                            <input type="text" class="form-control" value="{{old('alumnai_name')}}" placeholder="Enter Name" name="alumnai_name" id="">
                            @error('alumnai_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="" class="font-weight-bold form-label">Field</label>
                  <select class="form-select form-control form-select-lg" name="field_id" id="">
                    <option selected disabled>Select Field</option>
          @foreach ($alumnai as $item)
          <option value="{{$item->field_id}}">{{$item->field_name}}</option>
          @endforeach
                  </select>
                            @error('field_id')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-md-6">
                            <label for="">Achivement:</label>
                            <input type="text" placeholder="Enter Achivement" name="alumnai_achivement" value="{{old('alumnai_achivement')}}" class="form-control" id="">
                            @error('alumnai_achivement')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Qualification:</label>
                            <input type="text" placeholder="Enter Qualification" value="{{old('alumnai_qualification')}}" class="form-control" name="alumnai_qualification" id="">
                            @error('alumnai_qualification')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-md-6">
                            <label for="">Alumni Description </label>
                            <textarea name="alumnai_desc" value="{{old('alumnai_desc')}}"  rows="5" class="form-control"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="">Image:</label>
                            <input type="file" name="alumnai_image" value="{{old('alumnai_image')}}" class="form-control " placeholder="" aria-describedby="helpId">
                            @error('alumnai_image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                        </div>
                    </div>
                    <button type="submit"  class="btn btn-primary my-4">Add Alumnai</button>
                </form>
            </div>
        </div>
    </div>

</div>


@endsection