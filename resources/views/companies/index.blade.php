@extends('layouts.app')

@section('content')
  @include('shared.alert')
  <h1>Companies</h1>
  <div class="row">
    <div class="col-md-4">

      <a class = "btn btn-default" href="{{ route('companies.create')}}"> New Company</a>
    </div>
  </div>

  <!-- {!! link_to_route('companies.create', 'New Company', ['class'=>'btn btn-default']) !!} -->
  <br />
  <br />
  <table class="table">
    <tr>
      <th>Title</th>
      <th>Edit</th>
      <th>Delete</th>

    </tr>
    @foreach ($companies as $company )
      <tr>
        <td>{!! link_to_route('companies.show', $company->name, $company->id) !!}</td>
        <td>{!! link_to_route('companies.edit', 'Edit',$company->id,array('class'=> 'btn btn-info')) !!}</td>
        <td>
          {!! Form::open(['method' => 'DELETE', 'route' => ['companies.destroy',$company->id ]]) !!}
            <button type="submit" name="delete" class="btn btn-danger">Delete</button>
          {!! Form::close()  !!}
        </td>


      </tr>

    @endforeach
  </table>
@endsection
