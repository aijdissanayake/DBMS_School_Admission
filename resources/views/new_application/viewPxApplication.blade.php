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
				<tr><td>
					Child's names:
				</td></tr>
				<tr><td>
					Child's surname:
				</td></tr>
				<tr><td>
					Applicant's full name:
				</td></tr>
				<tr><td>
					School applied for:
				</td></tr>
				<tr><td>
					Total marks attained:
				</td></tr>
				<tr><td>
					No. of Years in Electoral Register:
				</td></tr>
				<tr><td>
					No. of Schools passed:
				</td></tr>
				<tr><td>
					Distance to Applied School:
				</td></tr>
			</table>
		</div> 
		<div class="col-xs-6">
			<table class="table table-striped">
				<tr><td>
					{{$px_application->denoted_name}}
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
			</table>
			
		</div>
		
	</div>
</div> 

@endsection