@extends('layouts.app')

@section('head')
<title>Welcome</title>
@endsection

@section('content')
<h3>Let's see if this comes up!!</h3>

<a href="{{route('newApplication')}}" role="button" class="btn btn-default">Enter Application</a>
@endsection