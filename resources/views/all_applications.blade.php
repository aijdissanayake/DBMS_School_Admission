@extends('layouts.app')

@section('head')
<title>Applications</title>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="/js/applications.js"></script>
@endsection

@section('content')


<div class="row">
	<div class="col-sm-10">
	<h2 >Current Application Submissions</h2>
	</div>
	<br>
	<div class="col-sm-2">
	<a class="btn btn-primary btn-lg" href="{{route('newApplication')}}" role="button">Submit new application</a>
	</div>
</div>
<div class="row">
	<div class="col-sm-9">
		<div class="row">
			<br><br>
			<form action="{{route('studentApp')}}" method="post">
			{{csrf_field()}}
			<div class="col-sm-5">
			<div class="form-group">
                <select type="text" class="form-control" placeholder="Search" id="field" >
                	<option value="denoted_name">First Name</option>
                	<option value="surname" selected="">Last Name</option>
                </select>
            </div>
            </div>
            <div class="col-sm-5">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" id="search" list="results" name="results">
                <datalist id="results">
				</datalist>
            </div>
            </div>
            <div class="col-sm-2">
            <div class="form-group">
            <button class="form-control" type="submit"> Submit</button>
            </div>
            </div>
            </form>
        </div>
            
     </div>
</div>
<div class="row">
		<div class="col-sm-6">
			<h3>Past Pupil Applications</h3>
			<br>
			@if(count($allPPApps))
			@foreach($allPPApps as $PPApp)
				<a href="{{route('viewPPApplication',['application_id' => $PPApp->application_id])}}" class="list-group-item">
					<li class="list-group-item">
						<h4 class="list-group-item-heading">{{$PPApp->initials}}&nbsp;{{$PPApp->surname}}<span class="badge" style="float: right;">marks: {{$PPApp->total_marks}}</span></h4>
					</li>					
					<br>
				</a>
			@endforeach
			@else
			<br><h4>No Applications for this category</h4>
			@endif
		</div>


		<div class="col-sm-6">
			<h3>Proximity Applications</h3>
			<br>
			@if(count($allProxApps))
			@foreach($allProxApps as $proxApp)
				<a href="{{route('viewPxApplication',['application_id' => $proxApp->application_id])}}" class="list-group-item">
						<h4 class="list-group-item-heading">{{$proxApp->initials}}&nbsp;{{$proxApp->surname}}<span class="badge" style="float: right;">marks: {{$proxApp->total_marks}}</span></h4>
					<br>
				</a>
			@endforeach
			@else
			<br><h4>No Applications for this category</h4>
			@endif
		</div>
	</div>
	@endsection