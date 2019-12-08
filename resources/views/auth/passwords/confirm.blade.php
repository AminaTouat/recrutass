@extends('layouts.navpass')

@section('content')
<head>
<title>Confirm</title>
</head>
<header class="masthead">
<section class="vh-100">
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="login-page bg-white shadow rounded p-4">
                            <div class="text-center">
                                <h4 class="mb-4">{{ __('Confirm Password') }}</h4>
                            </div>

                            <div class="card-body">
                                {{ __('Please confirm your password before continuing.') }}

                                <form method="POST" action="{{ route('password.confirm') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="password">{{ __('Password') }}<span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Confirm Password') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
</header>
<script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/plugins.js"></script>

    <!-- selectize js -->
    <script src="../js/selectize.min.js"></script>

    <script src="../js/jquery.nice-select.min.js"></script>

    <script src="../js/app.js"></script>
@endsection
