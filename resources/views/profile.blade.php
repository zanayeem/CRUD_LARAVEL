@extends('layout')

@section('main-content')

<div class="main-section-for-profile">
	<div class="card">
		<div class="card-body">
			<div class="card text-center">
			  <div class="card-header">
			    <h1>Profile</h1>
			  </div>
			  <div class="card-body">
			    <div class="student-profile">
			    	<img class="rounded-circle img-thumbnail" src="{{ URL::to('public/student_photos/' . $data -> photo)}}" alt="Photo Not Found">
			    	<br>
			    	<h3 class="card-title">{{$data -> name}}</h3>
			    	<h5 class="card-text">Email: {{$data -> email}}</h5>
			    	<h5 class="card-text">University: {{$data -> institution}}</h5>
			    	<h5 class="card-text">Department: {{$data -> batch}}</h5>
			    	<a href="#" class=" btn btn-sm btn-info">Facebook</a>
			    </div>
			  </div>
			  <div class="card-footer text-muted">
			    <a class="btn btn-sm btn-success" href="{{url('home')}}">Go Back</a>
			  </div>
			</div>
		</div>
	</div>
</div>
<br>
<br>
<br>


@endsection()