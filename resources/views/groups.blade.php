@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Groups</div>
                <div class="panel-body">
                    <groups url="/api/groups"><groups>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
