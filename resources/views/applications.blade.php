@extends('layouts.app')

@section('content')


<div class="row">
	<div class="col-xs-12 col-md-8 col-md-offset-2">
		<a class="btn btn-primary btn-lg" href="{{route('newApplication')}}" role="button">Submit new application</a>
		<a class="btn btn-primary btn-lg" href="#" role="button">View all applications</a>
	</div>
</div>

@endsection