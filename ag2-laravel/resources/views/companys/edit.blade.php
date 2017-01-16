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
                <div class="panel-heading">Editar Companhia</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('company/edit/'.$company->id) }}">

                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="PUT">

                        <fieldset>

                            <legend>Informações da companhia</legend>
                        
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-10 col-md-offset-1">Nome</label>

                                <div class="col-md-10 col-md-offset-1">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ $company->name }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        </fieldset>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1 text-center">
                                <button type="submit" class="btn btn-lg btn-primary">Editar</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
