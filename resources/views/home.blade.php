@extends('layouts.app')

@section('content')
<div class="container">
  <center>
    <div class="row">
      <div class="col-md-4">
        <h3><a href="{{ url('/users') }}">Users</a></h3>
      </div>
      <div class="col-md-4">
        <h3><a href="{{ url('/companies') }}">Companies</a></h3>
      </div>
      <div class="col-md-4">
        <h3><a href="{{ url('/users-group') }}">Users Groups</a></h3>
      </div>
    </div>
  </center>
  <center>
    <div style="font-size: 84px;margin-top:50px">
        AG2.nurun
    </div>
  </center>
</div>
@endsection
