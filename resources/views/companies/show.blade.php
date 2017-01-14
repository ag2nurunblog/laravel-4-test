@extends('layouts.app')

@section('content')
<div class="">
  <h1>{!! $company->name !!}</h1>
  <div class="">
    <h1>{!! $company->id !!}
  </div>
</div>
{!! link_to_route('companies.index', 'Companies'); !!}
@endsection
