@extends('layouts.app')

@section('head')
<title>View Past Pupil Application</title>
@endsection

@section('content')
<div class="row">
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
					Total marks:
				</thead></tr>
				<tr><thead>
					Past pupil name:
				</thead></tr>
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
					{{$pp_application->pp_name}}
				</td></tr>
				
			</table>

		</div> 
		
		
		
		
		
		
	</div>
</div> 

@endsection