@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create User</div>
                <div class="panel-body">
                  {!! Form::open([ 'route' => 'users-group.store', 'id' => 'user_group-form','class' => 'form-horizontal' ]) !!}
                    @include('users-group.form',array('submitButton' => 'Add User'))
                    <!-- <button type="submit" name="delete">Delete</button> -->
                  {!! Form::close()  !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
