@extends('layouts.app')

@section('head')
<title>Add a School</title>
@endsection

@section('content')

<div class="row">
	<div class="col-md-5">
	<h3>New School Registration</h3>		
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
		@if (session('status'))
		<div class="alert alert-success">
			{{ session('status') }}
		</div>
		@endif
	</div>
	<div class="col-md-5 col-md-offset-1">
		<h3> Schools currently in the database</h3>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>School Reg. No.</th>
					<th>Name</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($schools as $school)
				<tr>
					<td>{{$school->reg_no}}</td>
					<td>{{$school->name}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection