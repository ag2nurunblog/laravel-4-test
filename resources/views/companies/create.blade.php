@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Company</div>
                <div class="panel-body">
                  {!! Form::open([ 'route' => 'companies.store', 'id' => 'company-form', 'class' => 'form-horizontal' ]) !!}
                    {{ csrf_field() }}
                    @include('companies.form',array('submitButton' => 'Add Company'))
                    <!-- <button type="submit" name="delete">Delete</button> -->
                  {!! Form::close()  !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
