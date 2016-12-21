@extends('layouts.app')

@section('head')
<title>View Past Pupil Application</title>
@endsection

@section('content')
<div class="row">
	<div class="col-xs-12 col-md-6 col-md-offset-6">
		<div class="col-xs-6">
			<table class="table table-striped">
				<tr><td>
					Child's names:
				</td><td>
					{{$px_application->denoted_name}}
				</td></tr>
				<tr><td>
					Child's surname:
				</td><td>
					{{$px_application->surname}}
				</td></tr>
				<tr><td>
					Applicant's full name:
				</td><td>
					{{$px_application->full_name}}
				</td></tr>
				<tr><td>
					School applied for:
				</td><td>
					{{$px_application->name}}
				</td></tr>
				<tr><td>
					Total marks:
				</td><td>
					{{$px_application->total_marks}}
				</td></tr>
				<tr><td>
					Past pupil name:
				</td><td>
					{{$pp_application->pp_name}}
				</td></tr>
			</table>

		</div> 
		
		
	</div>
</div> 

@endsection