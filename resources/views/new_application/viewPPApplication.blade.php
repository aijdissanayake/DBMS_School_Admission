@extends('layouts.app')

@section('head')
<title>View Past Pupil Application</title>
@endsection

@section('content')
<div class="row">
	<div class="col-xs-12 col-md-6 col-md-offset-6">
		{{$px_application->denoted_name}}
		{{$px_application->surname}}
		{{$px_application->full_name}}
		{{$px_application->name}}
		{{$px_application->total_marks}}
		{{$pp_application->pp_name}}
	</div>
</div> 

@endsection