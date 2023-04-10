
@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
  <h1 class="text-center my-4">Alumnai</h1>
 <div class="container">
  <a href="{{ url ('./alumnai-add-alumnai')}}" class="btn btn-primary">Add Alumnai</a>
        <div class="row">
            <div class="col-md-12 my-5">
                <div class="table-responsive table-striped">
					<table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Field</th>
                        <th>Achivements</th>
                        <th>Qualification</th>
                        <th>Image</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($alumnai as $item)
                      <tr>
                        <td class="text-nowrap">{{$item->alumnai_name}}</td>
                        <td class="text-nowrap">{{$item->field_name}}</td>
                        <td class="text-nowrap">{{$item->alumnai_achivement}}</td>
                        <td class="text-nowrap">{{$item->alumnai_qualification}}</td>
                        <td><img src="{{ url('/public/alumnaiinfo') }}/{{$item->alumnai_image}}" width="50px" alt=""></td>
                        <td>
                          <a href="{{ url('/alumnai-edit-alumnai')}}/{{$item->alumnai_id}}"><button class="btn btn-primary">Edit</button></a>
                          <a href="{{ url('/alumnai-delete-alumnai')}}/{{$item->alumnai_id}}"><button class="btn btn-danger">Delete</button></a>           
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
				  </div>
            </div>
        </div>
    </div>

</div>


@endsection