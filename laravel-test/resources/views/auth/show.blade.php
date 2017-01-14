@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1> User Detail </h1>
        <ol class="breadcrumb">
            <li>Users</li>
            <li class="active">User Detail</li>
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

            <div class="box-body">
                <div class="col-md-12">
                    <a href="{{ url("/admin/user/$user->id/edit") }}" class="btn btn-primary btn-xs" title="Editar User"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>

                    <div class="modal fade" id="modal-delete-{{ $user->id }}">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title">Delete User</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Delete User?</p>
                                    <small>{{ $user->name }} </small>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                    <button type="button" class="btn btn-primary" onclick="confirmFunction({{ $user->id }})">Yes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5>
                        <span class="glyphicon glyphicon-user"></span>  Name: {{ $user->name }}
                    </h5>
                    <h5>
                        <span class="glyphicon glyphicon-envelope"></span> E-mail: <a href="mailto:{{ $user->email }}" target="_top">{{ $user->email }} </a>
                    </h5>
                    <h5>
                        <span class="glyphicon glyphicon-flag"></span>  Group(s):
                        <?php $groupHandle = App\Group::all();?>
                        @foreach($groupHandle as $group)
                                {{ $group->name }}
                        @endforeach
                    </h5>
                </div>
            </div>
        </div>
    </section>
@endsection