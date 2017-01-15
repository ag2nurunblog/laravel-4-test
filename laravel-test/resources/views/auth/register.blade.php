@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1> Users </h1>
        <ol class="breadcrumb">
            <li>Users</li>
            <li class="active">New User</li>
        </ol>
    </section>
    <section class="content">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">User</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>

            <form method="post" action="{{ url('/register') }}">
                <div class="box-body">
                    {!! csrf_field() !!}
                    <div class="col-md-12">
                        <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label>Name* (max length 255 characters)</label>
                            <input type="text" class="form-control" maxlength="255" name="name" value="{{ old('name') }}">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Group(s)*</label>
                            <?php $groupHandle = App\Group::all();?>
                            <select class="form-control" multiple="" name="group_id[]" required>
                                @foreach($groupHandle as $group)
                                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Company*</label>
                            <?php $companyHandle = App\Company::all();?>
                            <select class="form-control singleSelectGrouped" name="company_id" required>
                                @foreach($companyHandle as $company)
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label>E-mail* (max length 255 characters)</label>
                            <input type="email" class="form-control" maxlength="255" name="email" value="{{ old('email') }}">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label>Password*</label>
                            <input type="password" class="form-control" maxlength="255" name="password">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label>Confirm Password*</label>
                            <input type="password" name="password_confirmation" maxlength="255" class="form-control">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
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