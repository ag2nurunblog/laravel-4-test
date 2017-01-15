@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Companies</div>
                <div class="panel-body">
                    <companies url="/api/companies"><companies>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
