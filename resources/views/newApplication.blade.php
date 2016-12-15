@extends('layouts.app')

@section('head')
<title>New Application</title>
@endsection

@section('content')
<div class="row">
	<div class="col-xs-12 col-md-6">
		<h3>New Application</h3>
		<form action="storeApplication1" method="post">
		{{ csrf_field() }}
			<div class="form-group">
				<label for="nic">NIC number</label>
				<input type="text" class="form-control" id="nic" name="nic" placeholder="NIC number">
			</div>

			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Name">
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