<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="col-xl-4 col-lg-4 col-md-4 mx-auto my-auto">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Register Page</h1>
                        </div>
                        <form class="user" method="POST" action="{{ route('register') }}">
                            @csrf

                            @error('name')
                            <div class="alert-danger rounded-lg"
                                 style="height: 60px; margin-bottom: 20px; padding-left: 16px; padding-top: 4px;"
                                 role="alert">
                                <strong>Error</strong>
                                <p>
                                    {{$message}}
                                </p>
                            </div>
                            @enderror
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
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="name"
                                           name="name"
                                           placeholder="Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control form-control-user" id="email"
                                           name="email"
                                           placeholder="Email Adress">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user"
                                           name="password"
                                           id="password" placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                           name="password_confirmation"
                                           id="password-confirm" placeholder="Repeat Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="{{route('login')}}">Already have an account? Login!</a>
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
