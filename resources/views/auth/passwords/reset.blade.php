@extends('layouts.navpass')


@section('content')

<header class="masthead">
<section class="vh-100">
    <div class="home-center">
        <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="login_page bg-white shadow rounded p-4">
                                <div class="text-center">
                                    <h4 class="mb-4">{{ __('Reset Password') }}</h4>
                                </div>
                                <form class="login-form"  method="POST" action="{{ route('password.update') }}">
                                @csrf    
                                <div class="row">
                                        <div class="col-lg-12">
                                            <p class="text-muted">Please enter your email address. You will receive a link to create a new password via email.</p>
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
                                        <div class="form-group row">
                                            <label for="password">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="new-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-primary w-100">{{ __('Reset Password') }}</button>
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
