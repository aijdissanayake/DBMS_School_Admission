@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Current past pupil marking Scheme</h3>
			</div>
			<div class="panel-body">
				<ul class="list-group">
					<li class="list-group-item">
						<span class="badge">{{$pastPupilScheme[0]->name}}</span>
						Scheme name
					</li>
					<li class="list-group-item">
						<span class="badge">{{$pastPupilScheme[0]->edu_mult}}</span>
						Education level multiplier 
					</li>
					<li class="list-group-item">
						<span class="badge">{{$pastPupilScheme[0]->co_curr_mult}}</span>
						Co curricular level multiplier
					</li>
					<li class="list-group-item">
						<span class="badge">{{$pastPupilScheme[0]->ex_curr_mult}}</span>
						Extra curricular level multiplier
					</li>
					<li class="list-group-item">
						<span class="badge">{{$pastPupilScheme[0]->years_mult}}</span>
						Duration multiplier
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Current proximity marking Scheme</h3>
			</div>
			<div class="panel-body">
				<ul class="list-group">
					<li class="list-group-item">
						<span class="badge">{{$proximityScheme[0]->name}}</span>
						Scheme name
					</li>
					<li class="list-group-item">
						<span class="badge">{{$proximityScheme[0]->mult}}</span>
						Distance multiplier 
					</li>
					<li class="list-group-item">
						<span class="badge">{{$proximityScheme[0]->near_fact}}</span>
						Distance factor
					</li>
					<li class="list-group-item">
						<span class="badge">{{$proximityScheme[0]->year_mult}}</span>
						Duration multiplier
					</li>
					<li class="list-group-item">
						<span class="badge">{{$proximityScheme[0]->school_penalty}}</span>
						Nearby school penalty 
					</li>
				</ul>
			</div>
		</div>
	</div>

</div>

@if (Auth::user()->role==1)
<div class="row">
	<div class="col-md-6">
		<h3>Update past pupil catogory marking Scheme</h3>
		<form action="{{route('addPastPupilMarkingScheme')}}" method="post">
			{{csrf_field()}}
			<div class="form-group">
				<label for="pastPupilSchemeName">Scheme Name</label>
				<input type="text" class="form-control" id="pastPupilSchemeName" name="pastPupilSchemeName" placeholder="Enter name">
			</div>
			<div class="form-group">
				<label for="edu_mul">Education level multiplier</label>
				<input type="number" class="form-control" id="edu_mul" name="edu_mul" placeholder="Enter value">
			</div>
			<div class="form-group">
				<label for="co_curr_mul">Co-curricular level multiplier</label>
				<input type="number" class="form-control" id="co_curr_mul" name="co_curr_mul" placeholder="Enter value">
			</div>
			<div class="form-group">
				<label for="ex_curr_mul">Extra-curricular level multiplier</label>
				<input type="number" class="form-control" id="ex_curr_mul" name="ex_curr_mul" placeholder="Enter value">
			</div>
			<div class="form-group">
				<label for="pastYears">Duration multiplier</label>
				<input type="number" class="form-control" id="pastYears" name="years_mult" placeholder="Enter value">
			</div>


			<button type="submit" class="btn btn-default pull-right">Update</button>
		</form>
	</div>
	<div class="col-md-6">
		<h3>Update proximity catogory marking Scheme</h3>
		<form action="{{route('addProximityMarkingScheme')}}" method="post">
			{{csrf_field()}}
			<div class="form-group">
				<label for="proximitySchemeName">Scheme Name</label>
				<input type="text" class="form-control" id="proximitySchemeName" name="proximitySchemeName" placeholder="Enter name">
			</div>
			<div class="form-group">
				<label for="distance_mul">Distance multiplier</label>
				<input type="number" class="form-control" id="distance_mul" name="distance_mul" placeholder="Enter value">
			</div>
			<div class="form-group">
				<label for="distance_factor">Distance factor</label>
				<input type="number" class="form-control" id="distance_factor" name="distance_factor" placeholder="Enter value">
			</div>
			<div class="form-group">
				<label for="er_years">Duration multiplier</label>
				<input type="number" class="form-control" id="er_years" name="er_years" placeholder="Enter value">
			</div>
			<div class="form-group">
				<label for="school_penalty">Nearby school penalty</label>
				<input type="number" class="form-control" id="school_penalty" name="school_penalty" placeholder="Enter value">
			</div>


			<button type="submit" class="btn btn-default pull-right">Update</button>
		</form>
	</div>
	@if (session('status'))
	<div class="alert alert-success ">
		{{ session('status') }}
	</div>
	@endif
</div>
@endif



@endsection