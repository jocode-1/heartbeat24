@extends('layouts.master')

@section('title', 'Edit User')

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
                            <a href="{{ 'category' }}">User</a>
                        </li>
                        <li class="active">
                            <strong>Edit User</strong>
                        </li>
                    </ol>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>

        <section class="box ">
            <header class="panel_header">
                <h2 class="title pull-left">Edit User</h2>
                <div class="actions panel_actions pull-right">
                    <i class="box_toggle fa fa-chevron-down"></i>
                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                    <i class="box_close fa fa-times"></i>
                </div>
            </header>
            <div class="content-body">
                <div class="row">
                    <form action="{{ url('admin/update-user/'.$user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12">

                            <div class="form-group">
                                <label class="form-label" for="field-1">FullName</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="field-1">Email</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    <input type="text" name="email" value="{{ $user->email }}" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="field-1">Created At </label>
                                <span class="desc"></span>
                                <div class="controls">
                                    <input type="text" name="created_at" value="{{ $user->created_at->format('d/m/y') }}" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="field-1">Role As</label>
                                <div class="controls">
                                    <select name="role_as" class="form-control">
                                        
                                        <option value="1" {{ $user->role_as == '1' ? 'selected':''}} >Admin</option> 
                                        <option value="0" {{ $user->role_as == '0' ? 'selected':''}} >User</option> 
                                        <option value="2" {{ $user->role_as == '2' ? 'selected':''}} >Blogger</option> 
                                            
                                     
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 padding-bottom-30">
                            <div class="text-left">
                                <button type="submit" class="btn btn-primary">Upload User</button>
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
