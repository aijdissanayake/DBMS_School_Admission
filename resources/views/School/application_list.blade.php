@extends('layouts.app')

@section('head')
<title>Applications</title>
@endsection

@section('content')
<div class="row">
	<h2 style="padding-left: 1%">{{$school_details->name}}</h2>
		<div class="col-sm-6">
			<h3>Past Pupil Applications</h3>
			@if(count($past_pupil_applications))
			@foreach($past_pupil_applications as $past_pupil_application)
			<div class="list-group">
				<a href="#" class="list-group-item">
					<li class="list-group-item">
						<h4 class="list-group-item-heading">{{$past_pupil_application->initials}}&nbsp;{{$past_pupil_application->surname}}<span class="badge" style="float: right;">marks: {{$past_pupil_application->total_marks}}</span></h4>
					</li>					
					<br>
					<div style="padding-left: 5%">
					<p class="list-group-item-text">{{$past_pupil_application->denoted_name}}&nbsp;{{$past_pupil_application->surname}}</p>
					</div>
				</a>
			</div>
			@endforeach
			@else
			<br><h4>No Applications for this category</h4>
			@endif
		</div>


		<div class="col-sm-6">
			<h3>Proximity Applications</h3>
			@if(count($proximity_applications))
			@foreach($proximity_applications as $proximity_application)
			<div class="list-group">
				<a href="#" class="list-group-item">
					<li class="list-group-item">
						<h4 class="list-group-item-heading">{{$proximity_application->initials}}&nbsp;{{$proximity_application->surname}}<span class="badge" style="float: right;">marks: {{$proximity_application->total_marks}}</span></h4>
					</li>
					<br>
					<div style="padding-left: 5%">
						<p class="list-group-item-text">{{$proximity_application->denoted_name}}&nbsp;{{$proximity_application->surname}}</p>
					</div>
				</a>
			</div>
			@endforeach
			@else
			<br><h4>No Applications for this category</h4>
			@endif
		</div>
	</div>
	@endsection