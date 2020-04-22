@extends('layout')

@section('main-content')
<div class="main-for-newstudent">
	 <!-- VALIDATION OF DATA -->
	@if(count($errors) > 0)
	<ul>
		@foreach($errors -> all() as $err)
			<li>
				{{$err}}
			</li>
		@endforeach
	</ul>	
	@endif
	<!-- END OF VALIDATION -->
	<div class="card">		
		<div class="card-body">
			<h2>Add New Student<a class="btn btn-sm btn-info float-right" href="{{url('home')}}">All students</a></h2>
			<br>
			<form action="{{url('save')}}" method="POST" enctype="multipart/form-data">
				@csrf
				
			  <div class="form-group">
			    <label>Name</label>
			    <input name="sname" type="text" class="form-control">			   
			  </div>
			  <div class="form-group">
			    <label>Email</label>
			    <input name="semail" type="text" class="form-control">			   
			  </div>
			  <div class="form-group">
			    <label>Institution</label>
			    <input name="sins" type="text" class="form-control">			   
			  </div>
			  <div class="form-group">
			    <label>Batch</label>
			    <input name="sbatch" type="text" class="form-control">			   
			  </div>
			  <div class="form-group">
			    <label>Phone</label>
			    <input name="sphone" type="text" class="form-control">			   
			  </div>
			  <div class="form-group">
			    <label>Photo</label>
			    <input name="sphoto" type="file">			   
			  </div>
			  
			  <div class="form-group form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			    <label name="" class="form-check-label" for="exampleCheck1">Agree to all terms and conditions</label>
			  </div>
			  <input type="submit" class="btn btn-primary"></input>
			</form>
		</div>
	</div>

</div>

<br>
<br>













@endsection