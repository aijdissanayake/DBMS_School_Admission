@extends('layouts.app')

@section('head')
<title>View Proximity Application</title>
@endsection

@section('content')
<div class="row">
<h3>
	Details of Proximity Application
</h3>
	<div class="col-xs-12 col-md-6 col-md-offset-6">
		{{$px_application->no_er_years}}
		{{$px_application->no_schools_nearby}}
		{{$px_application->distance}}
	</div>
</div> 

@endsection