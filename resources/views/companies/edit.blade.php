@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Company</div>
                <div class="panel-body">
                  {!! Form::model($company,['method' => 'PATCH', 'route' => ['companies.update', $company->id], 'id' => 'company-form','class' => 'form-horizontal'] ) !!}
                    {{ csrf_field() }}
                    @include('companies.form',array('submitButton' => 'Edit Company'))
                    <!-- <button type="submit" name="delete">Delete</button> -->
                  {!! Form::close()  !!}

                </div>
            </div>
          </div>
    </div>
</div>
@endsection
