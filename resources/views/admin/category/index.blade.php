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
        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade in">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
                <strong>Success:</strong> {{ session('message') }}.
            </div>
        @endif

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
                <div class="content-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <table class="table table-hover" id="myTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Name</th>
                                        <th>Category Description</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($category as $item)
                                        <tr>
                                            <td> {{ $item->id }} </td>
                                            <td> {{ $item->name }} </td>
                                            <td> {{ $item->description }} </td>
                                            <td> {{ $item->status == '1' ? 'Hidden' : 'Shown' }} </td>
                                            <td> <a href=" {{ url('admin/edit-category/' . $item->id) }}"
                                                    class="btn btn-success">Edit</a> </td>
                                            <td> <a href=" {{ url('admin/delete-category/'.$item->id) }}" class="btn btn-danger">Delete</a> </td>

                                            {{-- <td> <a data-toggle="modal" onclick="AjaxModalContent();"
                                                    class="btn btn-danger deleteCategoryBtn">Delete</a> </td> --}}
                                            {{-- <td> <button type="button" class="btn btn-danger deleteCategoryBtn" value="{{ $item->id }}" >Delete</button></td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
{{-- 
                            <div class="modal fade" id="ultraModal-8">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">AJAX Content</h4>
                                        </div>

                                        <div class="modal-body">

                                            Content is loading...

                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-info">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>


@endsection

{{-- @section('script')

    <script>
        $(document).ready(function() {
            $('.deleteCategoryBtn').click(function(e) {
                e.preventDefault();

                var category_id = $(this).val();


            });
        });

        // function AjaxModalContent() {
        //     jQuery('#ultraModal-8').modal('show', {
        //         backdrop: 'static'
        //     });

        //     jQuery.ajax({
        //         url: "{{ url('admin/delete-category/'.$item->id) }}",
        //         success: function(response) {
        //             jQuery('#ultraModal-8 .modal-body').html(response);
        //         }
        //     });
        // }
    </script>

@endsection --}}
