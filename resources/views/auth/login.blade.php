<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-6 col-lg-6 col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                                </div>
                                <form class="user" action="{{ route('login') }}" method="post">
                                    @error('email')
                                    <div class="alert-danger rounded-lg"
                                         style="height: 60px; margin-bottom: 20px; padding-left: 16px; padding-top: 4px;"
                                         role="alert">
                                        <strong>Error</strong>
                                        <p>
                                            {{$message}}
                                        </p>
                                    </div>
                                    @enderror
                                    @error('password')
                                    <div class="alert-danger rounded-lg"
                                         style="height: 60px; margin-bottom: 20px; padding-left: 16px; padding-top: 4px;"
                                         role="alert">
                                        <strong>Error</strong>
                                        <p>
                                            {{$message}}
                                        </p>
                                    </div>
                                    @enderror
                                    @csrf
                                    <div class="form-group">
                                        <input type="email"
                                               class="form-control form-control-user @error('email') is-invalid @enderror"
                                               name="email" value="{{ old('email') }}"
                                               required autocomplete="email" autofocus
                                               id="exampleInputEmail" aria-describedby="emailHelp"
                                               placeholder="Enter Email Address...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password"
                                               class="form-control form-control-user @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="current-password"
                                               id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="{{route('register')}}">Don't you have an account? Sign up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('assets/js/sb-admin-2.min.js')}}"></script>

</body>

</html>
