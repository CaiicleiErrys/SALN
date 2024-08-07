<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Log In - {{ config('app.name', 'Laravel') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="assets/images/bagong-pilipinas-logo.png">
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">

                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <a href="/" class="auth-logo">
                                    <img src="assets/images/bagong-pilipinas-logo.png" height="80" class="logo-dark mx-auto" alt="">
                                    <img src="assets/images/bagong-pilipinas-logo.png" height="80" class="logo-light mx-auto" alt="">
                                </a>
                            </div>
                        </div>

                        <h4 class="text-muted text-center font-size-18"><b>LOG IN</b></h4>

                        <div class="p-3">
                            <form method="POST" class="form-horizontal mt-3" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="remember" id="remember">
                                            <label class="form-label ms-1" for="customCheck1">{{ __('Remember me') }}</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-3 text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-primary btn-info w-100 waves-effect waves-light" type="submit">
                                            {{ __('Log In') }}
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group mb-0 row mt-2">
                                    <a href="{{ route('register') }}" class="text-muted"><i class="mdi mdi-account-circle"></i>{{ __('Create an account') }}</a>
                                    {{-- <div class="col-sm-7 mt-3">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock"></i>{{ __('Forgot your password?') }}</a>
                                        @endif
                                    </div> --}}

                                </div>
                            </form>
                        </div>
                        <!-- end -->
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->

        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/js/app.js"></script>

    </body>
</html>
