@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
  <h1 class="text-center my-4">Subjects</h1>
    <div class="container">
      <a href="{{ url ('./subject-add-subject')}}" class="btn btn-primary">Add Subject</a>
        <div class="row">
            <div class="col-md-12 my-5">
				<div class="table-responsive table-striped">
					<table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Subject</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
						@foreach ($data as $item)
                      <tr>
                        <td class="text-nowrap">{{$item->subject_name}}</td>
						<td>
							<a href="{{ url('/subject-edit-subject')}}/{{$item->subject_id}}"><button class="btn btn-primary">Edit</button></a>
							<a href="{{ url('/subject-delete-subject')}}/{{$item->subject_id}}"><button class="btn btn-danger">Delete</button></a>           
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