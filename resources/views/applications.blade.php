@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-6">
    	<h2>Custom search field</h2>
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control input-lg" placeholder="Name" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
    </div>
</div>
<div>
	<button type="button" class="btn btn-default navbar-btn">Submit new application</button>
	<button type="button" class="btn btn-default navbar-btn">View all application</button>	

</div>

@endsection