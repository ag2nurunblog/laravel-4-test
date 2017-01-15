@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1> Users</h1>
        <ol class="breadcrumb">
            <li>Users</li>
        </ol>
    </section>

    <section class="content">
        @if(Session::has("flash_message"))
            <div class="alert {{Session::get("flash_message")[1]}} alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <b>{{Session::get("flash_message")[0]}}</b>
            </div>
        @endif
        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Users</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <a href="{{ url("/admin/user/new") }}">
                <button type="button" title="New User" class="btn btn-default" style="margin-top: 10px; margin-left: 10px;">New User</button>
            </a>
            </br>
            <div class="box-body">
                <table id="users" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Group(s)</th>
                            <th>Company</th>
                            <th>E-mail</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Group(s)</th>
                            <th>Company</th>
                            <th>E-mail</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        function confirmUserFunction(id)
        {
            $.ajax( {
                url: "user/delete",
                dataType: "json",
                type: "post",
                jsonp: false,
                data: {
                    id: id
                },
                success: function(data) {
                    if (data == 1) {
                        window.location.href = "users";
                    }
                }
            });
        }
    </script>
@endsection