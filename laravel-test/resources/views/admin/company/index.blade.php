@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1> Companies</h1>
        <ol class="breadcrumb">
            <li>Company</li>
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
                <h3 class="box-title">Companies</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <a href="{{ url("/admin/company/new") }}">
                <button type="button" title="New Company" class="btn btn-default" style="margin-top: 10px; margin-left: 10px;">New Company</button>
            </a>
            </br>
            <div class="box-body">
                <table id="company" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Created</th>
                        <th>Updated</th>
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
        function confirmCompanyFunction(id)
        {
            $.ajax( {
                url: "company/delete",
                dataType: "json",
                type: "post",
                jsonp: false,
                data: {
                    id: id
                },
                success: function(data) {
                    if (data == 1) {
                        window.location.href = "companies";
                    }
                }
            });
        }
    </script>
@endsection