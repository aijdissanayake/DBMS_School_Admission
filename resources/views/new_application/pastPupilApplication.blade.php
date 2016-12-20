@extends('layouts.app')

@section('head')
<title>New Past Pupil Application </title>
@endsection

@section('content')

<div class="row">
	<h1>Application for admission to the Grade One in the year 2017</h1><br>
	<div class="col-xs-12 col-md-6">
		<br>
		<h3>Details of Past Pupil</h3>

		@if ($errors)
		<br>
			<p style="color: red">{{$errors}}</p>
		@endif
		<br>
		<form method="post" action="{{route('storeApplication1', [$application_id])}}">
		{{ csrf_field()}}
			<div class="form-group">
				<label for="pp_name">Name in full</label>
				<input type="text" class="form-control" id="pp_name" name="pp_name" placeholder="eg: Mudiyanselage Randunu Gunapala">
			</div>

			<div class="form-group">
				<label for="pp_name_initials">Name with initials</label>
				<input type="text" class="form-control" id="pp_name_initials" name="pp_name_initials" placeholder="eg: M.R. Gunapala">
			</div>


			<div class="form-group">
				<label for="pp_nic">National Identity Card (NIC) number</label>
				<input type="text" class="form-control" id="pp_nic" name="pp_nic" placeholder="NIC number">
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default" style="float: right">Submit</button>
				</div>
			</div>

		</form>
		


	</div>
</div>


@endsection