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
                            <h1 class="m-0">Add Writer</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Add Writer</li>
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
                                        <label for="InputName">Name</label>
                                        <input type="text" class="form-control" id="InputName" name="name"
                                            placeholder="Enter Name" />
                                    </div>

                                    <div class="form-group">
                                        <label for="InputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="InputEmail1" name="email"
                                            placeholder="Enter email" />
                                    </div>

                                    <div class="form-group">
                                        <label for="InputPassword1">Password</label>
                                        <input type="password" class="form-control" id="InputPassword1" name="password"
                                            placeholder="Password" />
                                    </div>

                                    <div class="form-group">
                                        <label for="InputConfirmPassword">Confirm Password</label>
                                        <input type="password" class="form-control" id="InputConfirmPassword"
                                            name="ConfirmPassword" placeholder="Password" />
                                    </div>

                                    <div class="form-group">
                                        <label for="InputAvatar">Avatar</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputAvatar"
                                                    name="avatar" />
                                                <label class="custom-file-label" for="InputAvatar">Choose file</label>
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