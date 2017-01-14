@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>Perfil</h1>
        <ol class="breadcrumb">
            <li> Users </li>
            <li class="active">Perfil</li>
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
                <h3 class="box-title">User</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>

            <form method="post" action="{{ url('/admin/register/' . $user->id) }}">
                <div class="box-body">
                    {!! csrf_field() !!}
                    <input type="hidden" name="type" value="perfil">
                    <div class="col-md-12">
                        <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label>Name* (max length 255 characters)s</label>
                            <input type="text" class="form-control" maxlength="255" name="name" @if(isset($user->name)) value="{{ $user->name }}" @endif>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>

                            @if ($errors->has('name'))
                                <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Group(s)*</label>
                            <?php $groupHandle = App\Group::all();?>
                            <select class="form-control" multiple="" name="group_id[]" required>
                                @foreach($groupHandle as $group)
                                    <option value="{{ $group->id }}" @foreach($user->groups as $item)@if($item->id == $group->id) selected @endif @endforeach>
                                        {{ $group->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label>E-mail* (max length 255 characters)</label>
                            <input type="email" class="form-control" maxlength="255" name="email" @if(isset($user->email)) value="{{ $user->email }}" @endif>
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
                            <input type="password" class="form-control" maxlength="255" name="password" @if(isset($user->password)) value="{{ $user->password }}" @endif>
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
                            <input type="password" name="password_confirmation" maxlength="255" class="form-control" @if(isset($user->password)) value="{{ $user->password }}" @endif>
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
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection