@extends('layouts.app')

@section('content')


<div class="row">
	<div class="col-xs-12 col-md-8 col-md-offset-2">
		<h3 style="text-align: center;">Welcome</h3>
		<br><br>
		<div class="row"> 

			<div class="col-xs-8 col-xs-offset-2">
				<p>The system currently serves {{$schoolCount}} schools. More details may be found under the Schools tab.</p>
				<br>
				<p>There are {{$applicationCount}} applications belonging to {{$applicantCount}} registered applicants.</p>
				<br>

				<a class="btn btn-primary btn-lg" href="{{route('newApplication')}}" role="button">Submit new application</a>
				@if($username == 'admin')
				<a class="btn btn-primary btn-lg" href="{{route('viewAllApp')}}" role="button">View all applications</a>
				@else
				<a class="btn btn-primary btn-lg" href="{{route('list')}}" role="button">View all applications</a>
				@endif
			</div>

		</div>

	</div>
</div>

@endsection