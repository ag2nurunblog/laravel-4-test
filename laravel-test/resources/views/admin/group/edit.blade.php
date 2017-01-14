@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1> Edit Group</h1>
        <ol class="breadcrumb">
            <li> User Groups </li>
            <li class="active">Edit Group</li>
        </ol>
    </section>
    <section class="content">
        @if(Session::has("flash_message"))
            <div class="alert {{Session::get("flash_message")[1]}} alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <b>{{ Session::get("flash_message")[0] }}</b>
            </div>
            {{ Session::forget("flash_message") }}
        @endif
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Group</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            {!! Form::model($group, [
              'method' => 'PATCH',
              'url' => ['/admin/group', $group->id],
              'files' => true
            ]) !!}
                <div class="box-body">
                    {!! csrf_field() !!}
                    <div class="col-md-6">
                        <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label>Name* (max length 255 characters)</label>
                            <input type="text" class="form-control" name="name" maxlength="255" @if(isset($group->name)) value="{{ $group->name }}" @endif>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-default">Update</button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </section>
@endsection