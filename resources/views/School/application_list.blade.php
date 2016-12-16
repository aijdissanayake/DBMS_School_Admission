@extends('layouts.app')

@section('head')
<title>Applications</title>
@endsection

@section('content')
<div class="row">
		<div class="col-sm-6">
		<h2>Past Pupil Applications</h2>
		<?php $nums = [1,2,3,4,5]; ?>
		@foreach($nums as $num)
		<div class="list-group">
			<a href="#" class="list-group-item">
				<li class="list-group-item">
					<h4 class="list-group-item-heading">Second Child Name<span class="badge" style="float: right;">marks: xx</span></h4>
				</li>
				<br>
				<div style="padding-left: 5%">
					<p class="list-group-item-text">Child ID</p>
					<p class="list-group-item-text">Applicant Name</p>
					<p class="list-group-item-text">Address</p>
				</div>
			</a>
		</div>
		@endforeach
	</div>


	<div class="col-sm-6">
		<h2>Proximity Applications</h2>
		<div class="list-group">
			<a href="#" class="list-group-item">
				<li class="list-group-item">
					<h4 class="list-group-item-heading">Second Child Name<span class="badge" style="float: right;">3</span></h4>
				</li>
				<br>
				<div style="padding-left: 5%">
					<p class="list-group-item-text">Child ID</p>
					<p class="list-group-item-text">Applicant Name</p>
					<p class="list-group-item-text">Address</p>
				</div>
			</a>
		</div>
	</div>
</div>
@endsection