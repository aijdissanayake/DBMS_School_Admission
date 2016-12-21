@extends('layouts.app')

@section('head')
<title>Add Past Pupil Record</title>
@endsection

@section('content')

<div class="row">
	<div class="col-md-4">
	<h3>New Past Pupil Record</h3>		
		<form method="post", action="{{route('pastpupilRecordAdd')}}">
			{{csrf_field()}}
			<div class="form-group">
				<label for="nicNum">Registered NIC Number</label>
				<input name="nicNum" type="text" class="form-control" id="nicNum" placeholder="NIC No.">
			</div>
			<div class="form-group">
				<label for="regNum">School Registration Number</label>
				<input name="regNum" type="text" class="form-control" id="regNum" placeholder="Reg. No.">
			</div>
			<div class="form-group">
				<label for="years">Number of Years studied</label>
				<input name="years" type="number" min="1" max="13" class="form-control" id="years" placeholder="Years">
			</div>
			<div class="form-group">
				<label for="edu_level">Education Level</label>
				<select class="form-control custom-select" name="edu_level" id="edu_level">
					<option value="1">Level 1</option>
					<option value="2">Level 2</option>
					<option value="3">Level 3</option>
					<option value="4">Level 4</option>
					<option value="5">Level 5</option>
				</select>
			</div>
			<div class="form-group">
				<label for="co_curricular_level">Level of Participation in Co-Curricular Activities</label>
				<select class="form-control custom-select" name="co_curricular_level" id="co_curricular_level">
					<option value="1">Level 1</option>
					<option value="2">Level 2</option>
					<option value="3">Level 3</option>
					<option value="4">Level 4</option>
					<option value="5">Level 5</option>
				</select>
			</div>
			<div class="form-group">
				<label for="extra_curricular_level">Level of Participation in Extra-Curricular Activities</label>
				<select class="form-control custom-select" name="extra_curricular_level" id="extra_curricular_level">
					<option value="1">Level 1</option>
					<option value="2">Level 2</option>
					<option value="3">Level 3</option>
					<option value="4">Level 4</option>
					<option value="5">Level 5</option>
				</select>
			</div>
			<button type="submit" class="btn btn-default">Add Past Pupil Record</button>
		</form>	
		@if (session('status'))
		<div class="alert alert-success">
			{{ session('status') }}
		</div>
		@endif
	</div>
	<div class="col-md-4 col-md-offset-2">
		<h3>Records already in the database</h3>
		@if ($ppRecs)
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Past Pupil NIC</th>
					<th>School ID</th>
					<th>Time spent at school</th>
					<th>Level of Education</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($ppRecs as $ppRec)
				<tr>
					<td>{{$ppRec->nic}}</td>
					<td>{{$ppRec->school_reg_no}}</td>
					<td>{{$ppRec->no_years}}</td>
					<td>{{$ppRec->edu_level}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@else
		<p>There are currently no Past Pupil records in the database.</p>
		@endif
	</div>
</div>
@endsection