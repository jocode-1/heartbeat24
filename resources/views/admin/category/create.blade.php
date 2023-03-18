@extends('layouts.master')

@section('title', 'Add Category')

@section('content')

    <section class="wrapper main-wrapper" style=''>

        {{-- <div class="content-body">    <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 notification_btns">
                <p>
                    <button class="btn btn-primary" onclick="showSuccess('Your message has been succeeded')">Show Success Messsage</button>
                </p>


            </div>
        </div> --}}

        @if (session('message'))
        <div class="alert alert-success alert-dismissible fade in">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <strong>Success:</strong> {{ session('message')}}.</div>
            @endif

            @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-warning alert-dismissible fade in">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <strong>Warning:</strong> {{$error}} </div>
            @endforeach 
            @endif

        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <h1 class="title">Add Blog Category</h1>
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
                            <strong>Add Category</strong>
                        </li>
                    </ol>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>

        <section class="box ">
            <header class="panel_header">
                <h2 class="title pull-left">Add Category</h2>
                <div class="actions panel_actions pull-right">
                    <i class="box_toggle fa fa-chevron-down"></i>
                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                    <i class="box_close fa fa-times"></i>
                </div>
            </header>
            <div class="content-body">
                <div class="row">
                    <form action="{{ url('admin/add-category') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12">

                            <div class="form-group">
                                <label class="form-label" for="field-1">Category Name</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="form-label" for="field-1">Category Slug</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    <input type="text" name="slug" class="form-control">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="form-label" for="field-6">Description</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    <textarea name="description" class="form-control autogrow" cols="5" ></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="field-1">Image</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="field-1">Meta Title</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    <input type="text" name="meta_title" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="field-6">Meta Description</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    <textarea class="form-control autogrow" cols="5" name="meta_description"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="field-1">Meta Keyword</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    <input type="text" name="meta_keyword" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <li>
                                    <input tabindex="5" type="checkbox" class="skin-square-purple" name="navbar_status">
                                    <label class="icheck-label form-label" for="square-checkbox-9">Navbar Status</label>
                                </li>
                            </div>

                            <div class="form-group">
                                <li>
                                    <input type="checkbox" name="status">
                                    <label class="icheck-label form-label" for="square-checkbox-9">Status</label>
                                </li>
                            </div>

                        </div>

                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 padding-bottom-30">
                            <div class="text-left">
                                <button type="submit" class="btn btn-primary">Save</button>
                                {{-- <button type="button" class="btn">Cancel</button> --}}
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </section>
        </div>
    </section>
@endsection
