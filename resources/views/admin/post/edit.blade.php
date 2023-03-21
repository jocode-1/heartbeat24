@extends('layouts.master')

@section('title', 'Add Post')

@section('content')

    <section class="wrapper main-wrapper" style=''>

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
                    <h1 class="title"> Post</h1>
                </div>

                <div class="pull-right hidden-xs">
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ 'dashboard' }}"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="{{ 'category' }}">Post</a>
                        </li>
                        <li class="active">
                            <strong>Edit Post</strong>
                        </li>
                    </ol>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>

        <section class="box ">
            <header class="panel_header">
                <h2 class="title pull-left">Edit Post</h2>
                <div class="actions panel_actions pull-right">
                    <i class="box_toggle fa fa-chevron-down"></i>
                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                    <i class="box_close fa fa-times"></i>
                </div>
            </header>
            <div class="content-body">
                <div class="row">
                    <form action="{{ url('admin/update-post/'.$post->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12">

                            <div class="form-group">
                                <label class="form-label" for="field-1">Select Category</label>
                                {{-- <span class="desc">(&lt;select&gt;)</span> --}}
                                <div class="controls">
                                    <select name="category_id" class="form-control">
                                        <option value="">-----Select Category----</option>
                                        @foreach ($category as $cateitem)
                                        <option value="{{ $cateitem->id }}">{{ $cateitem->name }}</option> 
                                            
                                        @endforeach
                                    </select>
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="form-label" for="field-1">Post Name</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    <input type="text" name="name" value="{{ $post->name }}" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="field-1">Post Slug</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    <input type="text" name="slug" value="{{ $post->slug }}" class="form-control">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="form-label" for="field-6">Description</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    <textarea name="description" id="summernote" class="form-control autogrow" cols="5" > {{ $post->description }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="field-1">Youtube Iframe Link </label>
                                <span class="desc"></span>
                                <div class="controls">
                                    <input type="text" name="yt_iframe" value="{{ $post->yt_iframe }}" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="field-1">Meta Title</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    <input type="text" name="meta_title" value="{{ $post->meta_title }}" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="field-6">Meta Description</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    <textarea class="form-control autogrow" cols="5" name="meta_description"> {{ $post->meta_description }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="field-1">Meta Keyword</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    <input type="text" name="meta_keyword" value="{{ $post->meta_keyword }}" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <li>
                                    <input type="checkbox" name="status" {{ $post->status == '1' ? 'checked':'' }}>
                                    <label class="icheck-label form-label" for="square-checkbox-9">Status</label>
                                </li>
                            </div>

                        </div>

                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 padding-bottom-30">
                            <div class="text-left">
                                <button type="submit" class="btn btn-primary">Upload Post</button>
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
