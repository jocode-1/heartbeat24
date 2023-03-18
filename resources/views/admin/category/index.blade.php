@extends('layouts.master')

@section('title', 'Add Category')

@section('content')

    <section class="wrapper main-wrapper" style=''>

        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <h1 class="title">view Category</h1>
                </div>

                <div class="pull-right hidden-xs">
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ 'dashboard' }}"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="{{ 'category' }}">Categories</a>
                        </li>
                        <li class="active">
                            <strong>View Category</strong>
                        </li>
                    </ol>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>

        <div class="col-lg-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left">View Category</h2>
                    <div class="actions panel_actions pull-right">
                        <i class="box_toggle fa fa-chevron-down"></i>
                        <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                        <i class="box_close fa fa-times"></i>
                    </div>
                </header>
                <div class="content-body">    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Name</th>
                                        <th>Category Description</th>
                                        <th> Status</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($category as $item)
                                    <tr>
                                        <td> {{$item->id}} </td>
                                        <td> {{$item->name}} </td>
                                        <td> {{$item->description}} </td>
                                        <td> {{$item->status == '1' ? 'Hidden': 'Shown'}} </td>
                                        <td> <a href="" class="btn btn-success">Edit</a> </td>
                                    </tr>
                                    @endforeach   
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </section></div>
    </section>
@endsection
