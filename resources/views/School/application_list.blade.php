@extends('layouts.app')

@section('head')
<title>Welcome</title>
@endsection

@section('content')
<h2>List Group With Badges</h2>
  <ul class="list-group">
    <li class="list-group-item">New <span class="badge">12</span></li>
    <li class="list-group-item">Deleted <span class="badge">5</span></li>
    <li class="list-group-item">Warnings <span class="badge">3</span></li>
  </ul>
@endsection