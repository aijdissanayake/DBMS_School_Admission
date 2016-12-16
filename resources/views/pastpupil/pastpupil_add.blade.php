@extends('layouts.app')

@section('head')
	<title>Add Past Pupil</title>
@endsection

@section('content')
	<h1>New Past Pupil Registration</h1>
	<div class="row">
		<div class="col-md-4">
			<form>
			{{csrf_field()}}
		  		<div class="form-group">
		    		<label for="nic">NIC Number</label>
		    		<input name="nicNum" type="text" class="form-control" id="nic" placeholder="NIC">
		  		</div>
		  		<div class="form-group">
		    		<label for="name">Name with Initials</label>
		    		<input name="name" type="text" class="form-control" id="name" placeholder="Name">
		  		</div>
  				<button type="submit" class="btn btn-default">Add Past Pupil</button>
			</form>	
		</div>
	</div>
@endsection