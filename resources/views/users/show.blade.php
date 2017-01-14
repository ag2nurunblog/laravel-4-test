@extends('layouts.app')

@section('content')
<div class="">
  <h1>{!! $user->name !!}</h1>
  <h2>{!! $user->email !!}</h2>
  <div class="">
    <h1>{!! $user->id !!}
  </div>
</div>
{!! link_to_route('users.index', 'Users'); !!}
@endsection
