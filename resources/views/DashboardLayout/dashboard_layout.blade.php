<!DOCTYPE html>
<html>
<head>
	<title>Knewton Coaching Center</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</head>
<style>
	body{
	font-family: 'Poppins', sans-serif;
	background: #fafafa;
}
p{
	font-family: 'Poppins', sans-serif;
	font-size: 1.1em;
	font-weight: 300;
	line-height: 1.7em;
	color: #999;
}
a,
a:hover,
a:focus{
	color: inherit;
	text-decoration: none;
	transition: all 0.3s;
}

/* Side Bar*/



#sidebar.active {
    margin-left: -250px;
}
.wrapper{
	display: flex;
	text-decoration: none;
	transition: all 0.3s;
}

#sidebar{
	/* width: 200px !important; */
	background: black;
	color: #fff;
	transition: all 0.3s;
}


#sidebar .sidebar-header{
	padding: 20px;
	background: black;
}
#sidebar ul.components{
	padding: 20px 0;
	border-bottom: 1px solid #47748b;
}

#sidebar ul p{
	color: #fff;
	padding: 10px;
}

#sidebar ul li a{
	padding: 10px;
	font-size: 1.1em;
	display: block;
}

#sidebar ul li a:hover{
	color: black;
	background: #fff;
}
#sidebar ul li.active>a,
a[aria-expanded="true"] {
	color: #fff;
	background: black;
}

a[data-toggle="collapse"]{
	position: relative;
}

.dropdown-toggle::after{
	display: block;
	position: absolute;
	top: 50%;
	right: 20%;
	transform: translateY(-50%);
}
ul ul a{
	font-size: 0.9em !important;
	padding-left: 30px !important;
	background: black;
}

#content{
	/* width: 100%; */
	padding: 20px;
	min-height: 100vh;
	transition: all 0.3s;
}


@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}




</style>
<body>

	

	<div class="container-fluid">

		<div class="row">
			<div class="col-2 mx-0 px-0" style="height: 100vh;">
				<nav id="sidebar">
		 
					<div class="sidebar-header">
						<img src="{{url('public/logo.png')}}" class="img-fluid w-100" alt="">
					</div>
					<ul class="lisst-unstyled components">
					  <li>
						  <a href="{{url('/')}}">Dashboard</a>
					  </li>
						<li class="active">
							<a href="#coaching" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Coaching</a>
						  <ul class="collapse list-unstyled" id="coaching">
							  <li>
								  <a href="{{url('/coaching')}}">All Coachings</a>
								  <a href="{{url('/coaching-add-coaching')}}">Add Coaching</a>
							  </li>
			  
						  </ul>
						</li>
						<li class="active">
							<a href="#student" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Students</a>
						  <ul class="collapse list-unstyled" id="student">
							  <li>
								  <a href="{{url('/student')}}">All Student</a>
								  <a href="{{url('/student-add-student')}}">Add Student</a>
							  </li>
			  
						  </ul>
						</li>
						<li class="active">
							<a href="#faculty" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Faculity</a>
						  <ul class="collapse list-unstyled" id="faculty">
							  <li>
							  <a href="{{url('/faculity')}}">All Faculity</a>
							  <a href="{{url('/faculity-add-faculity')}}">Add Faculity</a>
							  </li>
			  
						  </ul>
						</li>
						<li class="active">
							<a href="#announcement" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Announcements</a>
						  <ul class="collapse list-unstyled" id="announcement">
							  <li>
							  <a href="{{url('/announcement')}}">All Announcement</a>
							  <a href="{{url('/announcement-add-announcement')}}">Add Announcement</a>
							  </li>
			  
						  </ul>
						</li>
						<li class="active">
							<a href="#class" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Classes</a>
						  <ul class="collapse list-unstyled" id="class">
							  <li>
							  <a href="{{url('/class')}}">All Class</a>
							  <a href="{{url('/class-add-class')}}">Add Class</a>
							  </li>
			  
						  </ul>
						</li>
						<li class="active">
							<a href="#subject" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Subjects</a>
						  <ul class="collapse list-unstyled" id="subject">
							  <li>
								  <a href="{{url('/subject')}}">All Subjects</a>
								  <a href="{{url('/subject-add-subject')}}">Add Subject</a>
							  </li>
			  
						  </ul>
						</li>
						<li class="active">
							<a href="#field" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Field</a>
						  <ul class="collapse list-unstyled" id="field">
							  <li>
								  <a href="{{url('/field')}}">All Field</a>
								  <a href="{{url('/field-add-field')}}">Add Field</a>
							  </li>
			  
						  </ul>
						</li>
						<li class="active">
							<a href="#test" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Test</a>
						  <ul class="collapse list-unstyled" id="test">
							  <li>
							  <a href="{{url('/test')}}">All Test</a>
							  <a href="{{url('/test-add-test')}}">Add Test</a>
							  <a href="{{url('/test-detail')}}"> Test Details </a>
							  <a href="{{url('/test-detail-add')}}"> All Test Details </a>
							  </li>
			  
						  </ul>
						</li>
						<li class="active">
							<a href="#alumnai" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Alumnai</a>
						  <ul class="collapse list-unstyled" id="alumnai">
							  <li>
							  <a href="{{url('/alumnai')}}">All Alumnai</a>
							  <a href="{{url('/alumnai-add-alumnai')}}">Add Alumnai</a>
							  </li>
			  
						  </ul>
						</li>
						<li class="active">
							<a href="{{url('/messages')}}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Messages</a>
						</li>
						<li class="active">
							<a href="#logout" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Logout From Here </a>
						  <ul class="collapse list-unstyled" id="logout">
							  <li>
							  <a href="{{url('/logout')}}">Logout</a>							
							  </li>
			  
						  </ul>
						</li>
			  
					</ul>
			   </nav>
			  
			</div>
			<div class="col-10">
				@yield('content')
			</div>
		</div>
	</div>

{{-- <div class="wrapper"> --}}


 
 

	 






<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>

$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

</script>


</body>
</html>