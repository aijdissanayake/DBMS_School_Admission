@extends('layouts.app')

@section('head')
<title>All Applications</title>
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1>Current Application Submissions</h1>
		<table class="table table-hover">
			@foreach($allApps as $app)
			<tr>
				<td>{{$app->id}}</td>
				<td>{{$app->initials}}</td>
				<td>{{$app->surname}}</td>
			</tr>
			@endforeach
		</table>
	</div>
</div>
@endsection