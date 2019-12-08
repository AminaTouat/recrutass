@extends('layouts.navbarRegistre')

@section('content')
<head>
<title>Signup</title>
</head>

    <!-- Hero Start -->
    <header class="masthead">
    <section class="vh-100" >
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6" id="register">
                            <div class="login_page bg-white shadow rounded p-4">
                                <div class="text-center">
                                    <h4 class="mb-4">Sign Up</h4>
                                </div>
                                <form class="login-form" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label for="name" >{{ __('Name') }} <span class="text-danger">*</span></label>
                                                <input  id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Last Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label for="email">{{ __('E-Mail Address') }} <span class="text-danger">*</span></label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" name="email" required autocomplete="email">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label for="password" >{{ __('Password') }}<span class="text-danger">*</span></label>

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
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label for="password-confirm">{{ __('Confirm Password') }} <span class="text-danger">*</span></label>
                                                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button id ="btnregistre" type="submit" class="btn btn-primary w-100" id="btnregistre">{{ __('Créer mon compte') }}</button>
                                        </div>
                                       
                                        <div class="mx-auto">
                                            <p class="mb-0 mt-3"><small class="text-dark mr-2">Already have an account ?</small> <a href="{{ route('login') }}" class="text-dark font-weight-bold">Sign in</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </div>
        </div>
    </section>
</header>

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
    @endsection