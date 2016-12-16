@extends('layouts.app')

@section('head')
<title>New Application -2 </title>
@endsection

@section('content')

<div class="row">
<h1>Application for admission to the Grade One in the year 2017</h1><br>
	<div class="col-xs-12 col-md-6">
		<h3>School Preferences</h3>
		<p>Please select 6 schools in descending order of preference.</p>

		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
				<label for="pref_1">1st Preference</label>
					<select class="form-control" id="pref_1">
						<option>dummy</option>
						<option>dummy</option>
					</select>
				</div>
				<div class="form-group">
				<label for="pref_2">2nd Preference</label>
					<select class="form-control" id="pref_2">
						<option>dummy</option>
						<option>dummy</option>
					</select>
				</div>
				<div class="form-group">
				<label for="pref_3">3rd Preference</label>
					<select class="form-control" id="pref_3">
						<option>dummy</option>
						<option>dummy</option>
					</select>
				</div>
				<div class="form-group">
				<label for="pref_4">4th Preference</label>
					<select class="form-control" id="pref_4">
						<option>dummy</option>
						<option>dummy</option>
					</select>
				</div>
				<div class="form-group">
				<label for="pref_5">5th Preference</label>
					<select class="form-control" id="pref_5">
						<option>dummy</option>
						<option>dummy</option>
					</select>
				</div>
				<div class="form-group">
				<label for="pref_6">6th Preference</label>
					<select class="form-control" id="pref_6">
						<option>dummy</option>
						<option>dummy</option>
					</select>
				</div>
			</div>
		</div>


	</div>
</div>


@endsection