<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - TakeOff</title>
    <link rel="stylesheet" href="{{ asset ('import/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background: url(&quot;{{ asset ('import/assets/img/logo1.png') }}&quot;) center / contain no-repeat;transform: scale(0.60);"></div>
                    </div>
                    <form action="{{ route('register.action') }}" method="POST">
                        @csrf
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Create an Account!</h4>
                            </div>
                            <form class="user">
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control" type="text" name="name" value="{{ old('name') }}" />
                                    </div>
                                </div>
                                <div class="mb-3"><input class="form-control" type="username" name="username" value="{{ old('username') }}" />
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control" type="password" name="password" />
                                    </div>
                                    <div class="col-sm-6"><input class="form-control" type="password" name="password_confirm" />
                                    </div>
                                </div><button class="btn btn-primary d-block btn-user w-100" type="submit">Register Account</button>
                                <hr>
                                <hr>
                            </form>
                            <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div>
                            <div class="text-center"><a class="small" href="login.html">Already have an account? Login!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>