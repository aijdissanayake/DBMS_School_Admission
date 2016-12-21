@extends('layouts.app')

@section('head')
<title>Add Past Pupil</title>
@endsection

@section('content')

<div class="row">
	<div class="col-md-4">
	<h3>New Past Pupil Registration</h3>
		<form method="post" action="{{route('pastpupilAdd')}}">
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
	<div class="col-md-4 col-md-offset-2">
	<h3>Current Past Pupil Records</h3>
	@if ($pastPupils)
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Past Pupil NIC</th>
					<th>Name</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($pastPupils as $pastPupil)
				<tr>
					<td>{{$pastPupil->nic}}</td>
					<td>{{$pastPupil->name_with_initials}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	
		@else
		<p>There are currently no past pupils in the database.</p>
		@endif
	</div>
	
</div>
@if (session('status'))
<div class="alert alert-success">
	{{ session('status') }}
</div>
@endif
@endsection