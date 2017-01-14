@extends('layouts.app')

@section('content')
  @include('shared.alert')
  <h1>Users</h1>
  <div class="row">
    <div class="col-md-4">
      <a class = "btn btn-default" href="{{ route('users.create')}}"> New User</a>
    </div>
  </div>
  <br />
  <br />
  <table class="table">
    <tr>
      <th>Title</th>
      <th>Email</th>
      <th>Company</th>
      <th>Edit</th>
      <th>Delete</th>

    </tr>
    @foreach ($users as $user )
      <tr>
        <td>{!! link_to_route('users.show', $user->name, $user->id) !!}</td>
        <td>{!! link_to_route('users.show', $user->email, $user->id) !!}</td>
        <td>{!! isset($user->company->name)? $user->company->name : 'Nothing'; !!}</td>
        <td>{!! link_to_route('users.edit', 'Edit',$user->id,array('class'=> 'btn btn-info')) !!}</td>
        <td>
          {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy',$user->id ]]) !!}
            <button type="submit" name="delete" class="btn btn-danger">Delete</button>
          {!! Form::close()  !!}
        </td>


      </tr>

    @endforeach
  </table>
@endsection
