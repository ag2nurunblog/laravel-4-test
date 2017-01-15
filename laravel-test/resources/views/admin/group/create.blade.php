@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1> User Groups </h1>
        <ol class="breadcrumb">
            <li>User Groups</li>
            <li class="active">New Group</li>
        </ol>
    </section>
    <section class="content">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">User Groups</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>

            <form method="post" action="{{ url('/admin/group') }}">
                <div class="box-body">
                    {!! csrf_field() !!}
                    <div class="col-md-6">
                        <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label>Name* (max length 255 characters)</label>
                            <input type="text" class="form-control" name="name" maxlength="255" value="{{ old('name') }}">
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
                        <button type="submit" class="btn btn-default">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection