@extends('layouts.app')

@section('head')
<title>Add a School</title>
@endsection

@section('content')
<h1>New School Registration</h1>
<div class="row">
	<div class="col-md-4">		
	<form method="post", action="{{route('schooldAdd')}}">
	{{csrf_field()}}
		<div class="form-group">
			<label for="regNum">School Registration Number</label>
			<input name="regNum" type="text" class="form-control" id="regNum" placeholder="Reg. No.">
		</div>
		<div class="form-group">
			<label for="name">Name of the School</label>
			<input name="name" type="text" class="form-control" id="name" placeholder="Name">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input name="password" type="text" class="form-control" id="password" placeholder="Set a password">
		</div>
		<button type="submit" class="btn btn-default">Add New School</button>
	</form>	
</div>
</div>
@endsection