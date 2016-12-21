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
		<div class="col-xs-6">
			<table class="table table-striped">
				<tr><thead>
					Child's names:
				</thead></tr>
				<tr><thead>
					Child's surname:
				</thead></tr>
				<tr><thead>
					Applicant's full name:
				</thead></tr>
				<tr><thead>
					School applied for:
				</thead></tr>
				<tr><thead>
					Total marks attained:
				</thead></tr>
				<tr><thead>
					No. of Years in Electoral Register:
				</thead></tr>
				<tr><thead>
					No. of Schools passed:
				</thead></tr>
				<tr><thead>
					Distance to Applied School:
				</thead></tr>
			</table>
		</div> 
		<div class="col-xs-6">
			<tr><td>
				{$px_application->denoted_name}}
			</td></tr>
			<tr><td>
				{{$px_application->surname}}
			</td></tr>
			<tr><td>
				{{$px_application->full_name}}
			</td></tr>
			<tr><td>
				{{$px_application->name}}
			</td></tr>
			<tr><td>
				{{$px_application->total_marks}}
			</td></tr>
			<tr><td>
				{{$px_application->no_er_years}}
			</td></tr>
			<tr><td>
				{{$px_application->no_schools_nearby}}
			</td></tr>
			<tr><td>
				{{$px_application->distance}}
			</td></tr>
		</div>
		
	</div>
</div> 

@endsection