@extends('layouts.navbarRegistre')

@section('content')
<head>
<title>Signin</title>
</head>
<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->


    <!-- Hero Start -->
    <section class="vh-100" >

        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="login-page bg-white shadow rounded p-4">
                                <div class="text-center">
                                    <h4 class="mb-4">{{ __('Login') }}</h4>
                                </div>
                                <form class="login-form" method="POST" action="{{ route('login') }}">
                                @csrf    
                                <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label for="email" >{{ __('E-Mail Address') }} <span class="text-danger">*</span></label>
                                                <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label for="password">{{ __('Password') }}<span
                                                        class="text-danger">*</span></label>

                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" placeholder="Password" required
                                                    autocomplete="new-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror


                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6 offset-md-4">
                                                <div class=" custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="remember"
                                                        name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-0">
                                            <button type="submit" class="btn btn-primary w-100">Sign in</button>
                                            @if (Route::has('password.request'))
                                            <a class="text-green color-b" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                            @endif
                                        </div>
                                        
                                        <div class="col-12 text-center">
                                            <p class="mb-0 mt-3"><small class="text-dark mr-2">Don't have an account ?</small> <a href="{{url('register')}}" class="text-dark font-weight-bold">Sign Up</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!---->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </div>
        </div>
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/plugins.js"></script>

    <!-- selectize js -->
    <script src="js/selectize.min.js"></script>

    <script src="js/jquery.nice-select.min.js"></script>

    <script src="js/app.js"></script>
</body>
@endsection
