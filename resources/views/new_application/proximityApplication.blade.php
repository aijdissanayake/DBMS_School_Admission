@extends('layouts.app')

@section('head')
<title>New Application -2 </title>
@endsection

@section('content')

<div class="row">
	<h1>Application for admission to the Grade One in the year 2017</h1><br>
	<div class="col-xs-12 col-md-6">
		<br>
		<h3>Details of Past Pupil</h3>
		<br>
		<form method="post" action="{{route('newApplication2')}}">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="no_er_years">Number of years that either the name of the applicant or the name of the spouse was included in the electoral register:</label>
				<input type="number" min="0" max="100" class="form-control" id="no_er_years" name="no_er_years">
			</div>

			<div class="form-group">
				<label for="no_schools_nearby">Number of schools located closer to the place of residence where the child could be admitted than the school applied by this application:</label>
				<input type="number" min="0" max="20" class="form-control" id="no_schools_nearby" name="no_schools_nearby">
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default" style="float: right">Submit</button>
				</div>
			</div>
			

		</form>

		

	</div>
</div>


@endsection