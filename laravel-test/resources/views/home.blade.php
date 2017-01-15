@extends('layouts.app')

@section('content')
    <?php setlocale (LC_ALL, 'en'); ?>

    <section class="content-header">
        <h1>
            Home
        </h1>
        <ol class="breadcrumb">
            <li>Home</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>
                            {{ $companies }}
                        </h3>
                        <p>
                            @if($companies > 1)
                                Companies
                            @else
                                Company
                            @endif
                        </p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-card"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>
                            {{ $groups }}
                        </h3>
                        <p>
                            @if($groups > 1)
                                User Groups
                            @else
                                Group
                            @endif
                        </p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-stalker"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>
                            {{ $users }}
                        </h3>
                        <p>
                            @if($users > 1)
                                Users
                            @else
                                User
                            @endif
                        </p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person"></i>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">Updates</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body" style="padding-bottom: 61px;">
                        <ul class="timeline">
                            @foreach ($posts->toArray() as $key => $post)
                                <li class="time-label">
                      <span class="bg-red">
                          {{ strtolower(Carbon\Carbon::parse($posts[$key][0]['updated_at'])->formatLocalized('%d %B %Y')) }}
                      </span>
                                </li>
                                @foreach ($post as $item)
                                    <li>
                                        <i class="fa fa-quote-left"></i>
                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> {{ Carbon\Carbon::parse($item['updated_at'])->format('H:i:s') }}</span>

                                            <h3 class="timeline-header">
                                                <a href="{{ url('admin/company/' . $item['id'] . '/edit') }}">
                                                    {{ $item['name'] }}
                                                </a>
                                            </h3>
                                        </div>
                                    </li>
                                @endforeach
                            @endforeach
                            <li>
                                <i class="fa fa-clock-o bg-gray"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

