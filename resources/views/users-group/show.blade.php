@extends('layouts.app')

@section('content')
<div class="">
  <h1>{!! $userGroup->user->name !!}</h1>
  <h2>{!! $userGroup->group->name !!}</h2>
  <div class="">
    <h1>{!! $userGroup->id !!}
  </div>
</div>
{!! link_to_route('users-group.index', 'userGroup'); !!}
@endsection
