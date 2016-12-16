@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-6">
			<h3>Update past pupil catogory marking Scheme</h3>
			<form>
			  <div class="form-group">
			    <label for="proximitySchemeName">Scheme Name</label>
			    <input type="text" class="form-control" id="proximitySchemeName" placeholder="Enter name">
			  </div>
			  <div class="form-group">
			    <label for="edu_mul">Education level multiplier</label>
			    <input type="number" class="form-control" id="edu_mul" placeholder="Enter value">
			  </div>
			  <div class="form-group">
			    <label for="co_curr_mul">Co-curricular level multiplier</label>
			    <input type="number" class="form-control" id="co_curr_mul" placeholder="Enter value">
			  </div>
			  <div class="form-group">
			    <label for="ex_curr_mul">Extra-curricular level multiplier</label>
			    <input type="number" class="form-control" id="ex_curr_mul" placeholder="Enter value">
			  </div>
			  <div class="form-group">
			    <label for="pastYears">Year multiplier</label>
			    <input type="number" class="form-control" id="pastYears" placeholder="Enter value">
			  </div>

			  
			  <button type="submit" class="btn btn-default pull-right">Submit</button>
			</form>
		</div>
		<div class="col-md-6">
			<h3>Upadate proximity catogory marking Scheme</h3>
			<form>
			  <div class="form-group">
			    <label for="pastPupilSchemeName">Scheme Name</label>
			    <input type="text" class="form-control" id="pastPupilSchemeName" placeholder="Enter name">
			  </div>
			  <div class="form-group">
			    <label for="distance_mul">Distance multiplier</label>
			    <input type="number" class="form-control" id="distance_mul" placeholder="Enter value">
			  </div>
			  <div class="form-group">
			    <label for="distance_factor">Distance factor</label>
			    <input type="number" class="form-control" id="distance_factor" placeholder="Enter value">
			  </div>
			  <div class="form-group">
			    <label for="er_years">Year multiplier</label>
			    <input type="number" class="form-control" id="er_years" placeholder="Enter value">
			  </div>

			  
			  <button type="submit" class="btn btn-default pull-right">Submit</button>
			</form>
		</div>
	</div>

@endsection