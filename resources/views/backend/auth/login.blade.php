{{--<!doctype html>--}}
{{--<html lang="en">--}}

{{--<head>--}}
{{--    <!-- Required meta tags -->--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--    <title>Login</title>--}}
{{--    <!-- Bootstrap CSS -->--}}
{{--    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}">--}}
{{--    <link href="{{ asset('backend/assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">--}}
{{--    <link rel="stylesheet" href="{{ asset('backend/assets/libs/css/style.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">--}}
{{--    <style>--}}
{{--        html,--}}
{{--        body {--}}
{{--            height: 100%;--}}
{{--        }--}}

{{--        body {--}}
{{--            display: -ms-flexbox;--}}
{{--            display: flex;--}}
{{--            -ms-flex-align: center;--}}
{{--            align-items: center;--}}
{{--            padding-top: 40px;--}}
{{--            padding-bottom: 40px;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}

{{--<body>--}}
{{--<!-- ============================================================== -->--}}
{{--<!-- login page  -->--}}
{{--<!-- ============================================================== -->--}}
{{--<div class="splash-container">--}}
{{--    <div class="card ">--}}
{{--        <div class="card-header text-center">--}}
{{--            <a href="{{ asset('backend/index.html') }}"><img class="logo-img" src="{{ asset('backend/assets/images/logo.png') }}" alt="logo"></a>--}}
{{--            <span class="splash-description">Please enter your user information.</span>--}}
{{--        </div>--}}
{{--        <div class="card-body">--}}
{{--            <form class="user" action="{{route('doLogin')}}" method="post">--}}
{{--                {{csrf_field()}}--}}
{{--                <div class="form-group">--}}
{{--                    <input class="form-control form-control-lg" id="username" name="username" type="text" placeholder="Username" autocomplete="off" required>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input class="form-control form-control-lg" id="password" name="password" type="password" placeholder="Password" required>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label class="custom-control custom-checkbox">--}}
{{--                        <input class="custom-control-input" type="checkbox" name="remember"><span class="custom-control-label">Remember Me</span>--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>--}}
{{--                <hr>--}}
{{--                <a href="index.html" class="btn btn-danger btn-user btn-block">--}}
{{--                    <i class="fab fa-google fa-fw"></i> Login with Google--}}
{{--                </a>--}}
{{--                <a href="index.html" class="btn btn-facebook btn-user btn-block">--}}
{{--                    <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook--}}
{{--                </a>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--        <div class="card-footer bg-white p-0">--}}
{{--            <div class="card-footer-item card-footer-item-bordered">--}}
{{--                <a href="#" class="footer-link">Create An Account</a>--}}
{{--            </div>--}}
{{--            <div class="card-footer-item card-footer-item-bordered">--}}
{{--                <a href="#" class="footer-link">Forgot Password</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- ============================================================== -->--}}
{{--<!-- end login page  -->--}}
{{--<!-- ============================================================== -->--}}
{{--<!-- Optional JavaScript -->--}}
{{--<script src="{{ asset('backend/assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>--}}
{{--<script src="{{ asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>--}}
{{--</body>--}}

{{--</html>--}}









        <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('backend/assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>
<!-- ============================================================== -->
<!-- login page  -->
<!-- ============================================================== -->
<div class="splash-container">
    <div class="card ">
        <div class="card-header text-center">
            <a href="{{ asset('backend/index.html') }}"><img class="logo-img" src="{{ asset('backend/assets/images/logo.png') }}" alt="logo"></a>
            <span class="splash-description">Please enter your user information.</span>
        </div>
        <div class="card-body">
            <span class="text-danger">{{Session::has('failed') ? Session::get('failed') : ''}}</span>
        </div>
            <form class="user" action="{{ route('doLogin') }}" method="post">
                @csrf
                <div class="form-group">
                    <input class="form-control form-control-lg" id="email" name="email" type="email" placeholder="Email" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="password" name="password" type="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="remember"><span class="custom-control-label">Remember Me</span>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                <hr>
                <a href="index.html" class="btn btn-danger btn-user btn-block">
                    <i class="fab fa-google fa-fw"></i> Login with Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                    <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                </a>
            </form>
        </div>
        <div class="card-footer bg-white p-0">
            <div class="card-footer-item card-footer-item-bordered">
                <a href="#" class="footer-link">Create An Account</a>
            </div>
            <div class="card-footer-item card-footer-item-bordered">
                <a href="#" class="footer-link">Forgot Password</a>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end login page  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<script src="{{ asset('backend/assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>

</html>

