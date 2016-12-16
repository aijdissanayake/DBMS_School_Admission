@extends('layouts.app')

@section('head')
<title>Add Past Pupil Record</title>
@endsection

@section('content')
<h1>New Past Pupil Record</h1>
<div class="row">
	<div class="col-md-4">		
	<form>
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
</div>
</div>
@endsection