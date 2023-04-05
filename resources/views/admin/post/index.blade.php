@extends('layouts.master')

@section('title', 'View Posts')

@section('content')

    <section class="wrapper main-wrapper" style=''>

        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <h1 class="title">Posts</h1>
                </div>

                <div class="pull-right hidden-xs">
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ 'dashboard' }}"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="{{ 'category' }}">Posts</a>
                        </li>
                        <li class="active">
                            <strong>View Posts</strong>
                        </li>
                    </ol>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>
        @if (session('message'))
        <div class="alert alert-success alert-dismissible fade in">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <strong>Success:</strong> {{ session('message')}}.</div>
            @endif

        <div class="col-lg-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left">View Posts</h2>
                    <div class="actions panel_actions pull-right">
                        <i class="box_toggle fa fa-chevron-down"></i>
                        <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                        <i class="box_close fa fa-times"></i>
                    </div>
                </header>
                <div class="content-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <table class="table table-hover" id="myTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Post Name</th>
                                        <th>Category Name</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($posts as $item)
                                        <tr>
                                            <td> {{ $item->id }} </td>
                                            <td> {{ $item->name }} </td>
                                            <td> {{ $item->category->name ?? null }} </td>
                                            <td> {{ $item->status == '1' ? 'Hidden' : 'Visible' }} </td>
                                            <td> <a href=" {{ url('admin/post/'.$item->id) }}" class="btn btn-success">Edit</a> </td>
                                            <td> <a href=" {{ url('admin/delete-post/'.$item->id) }}" class="btn btn-danger">Delete</a> </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection
