@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <div class="list-group">
                        <a class="list-group-item" href="{{ url('/companies') }}">
                            Companies
                        </a>
                        <a class="list-group-item" href="{{ url('/groups') }}">
                            Groups
                        </a>
                        <a class="list-group-item" href="{{ url('/users') }}">
                            Users
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
