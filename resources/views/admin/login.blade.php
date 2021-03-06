<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div class="accountbg"></div>
    <div class="wrapper-page">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center m-0">
                    <a href="" class="logo logo-admin">
                        <img src="{{asset('backend/assets/images/anto-logo-black.png')}}" height="100"
                            alt="logo">
                    </a>
                </h3>

                <div class="p-3">
                    <h4 class="text-muted font-18 m-b-5 text-center">Welcome!!</h4>
                    <p class="text-muted text-center">Sign in to continue.</p>

                    @if ($errors->any())
                        <div class=" mt-3">
                            <div class="font-medium text-red-600 text-danger">
                                {{ __('Whoops! Something went wrong.') }}
                            </div>

                            <ul class="mt-3 list-disc list-inside text-danger text-sm text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session()->has('success'))
                        <div class="alert alert-info text-center text-dark mt-3 alert-solid alert-dismissible shadow-sm p-3 mb-5 rounded"
                            role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if (session()->has('message'))
                        <div class="alert alert-success text-center text-dark mt-3 alert-solid alert-dismissible shadow-sm p-3 mb-5 rounded"
                            role="alert">
                            {{ session('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form class="form-horizontal m-t-30 loginForm" action="{{ route('login') }}" method="POST">@csrf

                        <div class="form-group">
                            <label for="username">Email</label>
                            <input type="text" name="email" class="form-control" id="username"
                                placeholder="Enter username">
                        </div>

                        <div class="form-group">
                            <label for="userpassword">Password</label>
                            <input type="password" name="password" class="form-control" id="userpassword"
                                placeholder="Enter password">
                        </div>

                        <div class="form-group row m-t-20">
                            <div class="col-sm-8">
                                <div class="custom-control custom-checkbox">
                                    <a href="{{ route('forgot.password') }}" class="text-muted"><i class="mdi mdi-lock"></i>Forgot password?</a>
                                </div>
                            </div>
                            <div class="col-sm-4 text-right">
                                <button class="btn btn-success btn-block w-md waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

            {{-- <div class="m-t-40 text-center">
                <p>Don't have an account ? <a href="pages-register.html" class="font-500 font-14 text-primary font-secondary"> Signup Now </a> </p>
                <p>?? 2018 Fonik. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
            </div> --}}

        </div>


        <!-- jQuery  -->
        <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/waves.js') }}"></script>
        <script src="{{ asset('backend/assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('backend/assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('backend/assets/js/jquery.scrollTo.min.js') }}"></script>
        <!-- App js -->
        <script src="{{ asset('backend/assets/js/app.js') }}"></script>

    </body>
</html>