@extends('layout')
@section('main-content')




<div class='main-section'>
	<div class="card">
		<div class="card-body">
			<h1>All Students Information <a class="btn btn-sm btn-success float-right" href="{{url('add-student')}}">Add New Student</a></h1>
			<br>
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">Sl</th>
			      <th scope="col">Name</th>
			      <th scope="col">Email</th>
			      <th scope="col">Institution</th>
			      <th scope="col">Batch</th>
			      <th scope="col">Phone</th>
			      <th scope="col">Photo</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			   <?php $i=1; ?>
			  	@foreach($data as $d)

			    <tr>
			      <th scope="row"><?php echo $i; $i++ ?></th>
			      <td>{{($d -> name)}}</td>
			      <td>{{($d -> email)}}</td>
			      <td>{{($d -> institution)}}</td>
			      <td>{{($d -> batch)}}</td>
			      <td>{{($d -> phone)}}</td>
			      <td><img class="rounded-circle" style="width:50px; height:50px" src="public/student_photos/{{($d -> photo)}}"></td>
			      <td>
			      	<a class="btn btn-sm btn-info" href="{{url('profile',$d -> id)}}">View</a>
			      	<a class="btn btn-sm btn-warning" href="{{url('edit-student',$d -> id)}}">Edit</a>
			      	<a class="btn btn-sm btn-danger" href="{{url('delete-student',$d -> id)}}">Delete</a>					      	
			      </td>
			  </tr>
			  @endforeach

			    
			  </tbody>
			</table>
		</div>
	</div>
</div>
	





@endsection

	

