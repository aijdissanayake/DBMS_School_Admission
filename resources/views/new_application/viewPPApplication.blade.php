@extends('layouts.app')

@section('head')
<title>View Past Pupil Application</title>
@endsection

@section('content')
<div class="row">
	<div class="col-xs-12 col-md-6 col-md-offset-6">
		{{$pp_application->pp_name}}
	</div>
</div> 

@endsection