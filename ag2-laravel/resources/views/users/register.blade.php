@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if(session('status'))
                <div class="alert alert-{{ session('status')['type'] }}" role="alert">
                    <p>{{ session('status')['retorno'] }}</p>
                </div>
            @endif
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastrar</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('user/register') }}">

                        {{ csrf_field() }}

                        <fieldset>

                            <legend>Informações pessoais</legend>
                        
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-10 col-md-offset-1">Nome</label>

                                <div class="col-md-10 col-md-offset-1">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-10 col-md-offset-1">E-Mail</label>

                                <div class="col-md-10 col-md-offset-1">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="company" class="col-md-10 col-md-offset-1">Companhia</label>

                                <div class="col-md-10 col-md-offset-1">
                                    <select id="company" class="form-control" name="company" required>
                                        <option value="">Selecionar</option>
                                        @foreach($companys as $company)
                                            <option value="{{ $company->id }}" {{ (old('company') == $company->id ? 'selected' : '') }}>{{ $company->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="grupo" class="col-md-10 col-md-offset-1">Grupos</label>

                                <div class="col-md-10 col-md-offset-1">
                                    <div class="checkbox">
                                        @foreach($groups as $group)
                                            <label for="group-{{ $group->id }}">
                                                <input type="checkbox" id="group-{{ $group->id }}" name="group[]" value="{{ $group->id }}" {{ (!empty(old('group')) ? (in_array($group->id, old('group')) ? 'checked' : '') : '') }}> {{ $group->name }}
                                            </label>
                                            <br>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="active" class="col-md-10 col-md-offset-1">Status</label>

                                <div class="col-md-10 col-md-offset-1">
                                    <select id="active" class="form-control" name="active" required>
                                        <option value="">Selecionar</option>
                                        <option value="1" {{ (old('active') == 1 ? 'selected' : '') }}>Ativo</option>
                                        <option value="2" {{ (old('active') == 2 ? 'selected' : '') }}>Desativado</option>
                                    </select>
                                </div>
                            </div>

                        </fieldset>

                        <fieldset>
                            
                            <legend>Privacidade</legend>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-10 col-md-offset-1">Senha</label>

                                <div class="col-md-10 col-md-offset-1">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password-confirm" class="col-md-10 col-md-offset-1">Confirmar Senha</label>

                                <div class="col-md-10 col-md-offset-1">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                                @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                            </div>

                        </fieldset>

                        <hr>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1 text-center">
                                <button type="submit" class="btn btn-lg btn-primary">Cadastrar</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
