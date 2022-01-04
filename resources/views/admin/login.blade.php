@extends('admin.layout.master')

@section('body_div')

<body class="hold-transition login-page">
    <div class="login-box">
        @endsection

        @section('content')


        <div class="login-logo">
            <a href="{{ route('admin.login') }}"><b>Sample Blog Project</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @if (count($errors) > 1)
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @else
                    {{ $errors->first() }}
                    @endif

                </div>
                @endif

                <form action="{{ route('admin.login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input name="email" type="email" class="form-control" placeholder="Email" value={{ old('email')
                            }}>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>



                <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>


            </div>
            <!-- /.login-card-body -->
        </div>



        @endsection