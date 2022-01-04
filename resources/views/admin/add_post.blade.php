@extends('admin.layout.admin_master')

@section('body_div')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @endsection

        @section('content')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Post Blog</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Post Blog</li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row justify-content-md-center">
                        <div class="card card-primary col-8">
                            <!-- form start -->
                            <form>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputTitle">Title</label>
                                        <input type="text" class="form-control" id="InputTitle" name="title"
                                            placeholder="Enter Blog Title" />
                                    </div>

                                    <div class="form-group">
                                        <label for="category">Select Category</label>
                                        <select class="select2bs4" multiple="multiple" id="category"
                                            data-placeholder="Select Category" style="width: 100%">
                                            <option>Alabama</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="PostContent">Write Blog Content</label>
                                        <textarea class="form-control" rows="3" id="PostContent"
                                            placeholder="Write Blog Content here ..."></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="BlogImage">Blog Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="BlogImage"
                                                    name="blog_image" />
                                                <label class="custom-file-label" for="BlogImage">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="row justify-content-end">
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        @include('admin.layout.footer')

        @endsection