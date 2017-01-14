@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit</div>
                <div class="panel-body">
                  
                  {!! Form::model($userGroup,['method' => 'PATCH', 'route' => ['users-group.update', $userGroup->id], 'id' => 'user_group-form', 'class' => 'form-horizontal'] ) !!}
                  {{ csrf_field() }}

                    <input type='hidden' name='id' value='{!! $userGroup->id !!}'>
                    @include('users-group.form',array('submitButton' => 'Edit User Group'))
                    <!-- <button type="submit" name="delete">Delete</button> -->
                  {!! Form::close()  !!}

                </div>
            </div>
          </div>
    </div>
</div>
@endsection
