@extends('layouts.app')

@section('content')
  @include('shared.alert')
  <h1>Users Groups</h1>
  <div class="row">
    <div class="col-md-4">
      <a class = "btn btn-default" href="{{ route('users-group.create')}}"> New User Group</a>
    </div>
  </div>
  <br />
  <br />
  <table class="table">
    <tr>
      <th>User</th>
      <th>Group</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>

    @foreach ($usersGroup as $userGroup )
      <tr>

        <td>{!! link_to_route('users-group.show', $userGroup->user->name, $userGroup->id) !!}</td>
        <td>{!! link_to_route('users-group.show', $userGroup->group->name, $userGroup->id) !!}</td>
        <td>{!! link_to_route('users-group.edit', 'Edit',$userGroup->id,array('class'=> 'btn btn-info')) !!}</td>
        <td>
          {!! Form::open(['method' => 'DELETE', 'route' => ['users-group.destroy',$userGroup->id ]]) !!}
            <button type="submit" name="delete" class="btn btn-danger">Delete</button>
          {!! Form::close()  !!}
        </td>


      </tr>

    @endforeach
  </table>
@endsection
