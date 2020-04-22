@extends('layout')

@section('main-content')
 
<div class="main-for-newstudent">
	<div class="card">		
		<div class="card-body">
			<h2>Edit Student Information<a class="btn btn-sm btn-info float-right" href="{{url('home')}}">All students</a></h2>
			<br>
			<form action="{{url('update-student',$data -> id)}}" method="POST" enctype="multipart/form-data">
				@csrf
				
			  <div class="form-group">
			    <label>Name</label>
			    <input name="sname" value="{{$data -> name}}" type="text" class="form-control">			   
			  </div>
			  <div class="form-group">
			    <label>Email</label>
			    <input name="semail" value="{{$data -> email}}" type="text" class="form-control">			   
			  </div>
			  <div class="form-group">
			    <label>Institution</label>
			    <input name="sins" value="{{$data -> institution}}" type="text" class="form-control">			   
			  </div>
			  <div class="form-group">
			    <label>Batch</label>
			    <input name="sbatch" value="{{$data -> batch}}" type="text" class="form-control">			   
			  </div>
			  <div class="form-group">
			    <label>Phone</label>
			    <input name="sphone" value="{{$data -> phone}}" type="text" class="form-control">			   
			  </div>
			
			  <div class="form-group form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			    <label name="" class="form-check-label" for="exampleCheck1">I reassure the credentials</label>
			  </div>
			  <input type="submit" class="btn btn-primary" value="Update"></input>
			</form>
		</div>
	</div>

</div>

<br>
<br>













@endsection