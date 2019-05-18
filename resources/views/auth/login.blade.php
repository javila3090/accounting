@extends('layouts.auth')

@section('content')
    <div class="authentication-wrapper authentication-1 px-4">
        <div class="authentication-inner py-5">

            <!-- [ Logo ] Start -->
            <div class="d-flex justify-content-center align-items-center">
                <div class="ui-w-60">
                    <div class="w-100 position-relative">
                        <img src="assets/img/logo-dark.png" alt="Brand Logo" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- [ Logo ] End -->

            <!-- [ Form ] Start -->
            <form method="POST" class="my-5" action="{{ route('login') }}">
                        @csrf
                <div class="form-group">
                    <label class="form-label">{{ __('messages.email') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    <div class="clearfix"></div>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label d-flex justify-content-between align-items-end">
                        <span>{{ __('messages.password') }}</span>
                        @if (Route::has('password.request'))
                            <a href="pages_authentication_password-reset.html" class="d-block small">{{ __('messages.forgot') }}</a>
                        @endif
                    </label>
                     <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <div class="clearfix"></div>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror                    
                </div>
                <div class="d-flex justify-content-between align-items-center m-0">
                    <label class="custom-control custom-checkbox m-0">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-label">{{ __('messages.remember') }}</span>
                    </label>
                    <button type="submit" class="btn btn-primary">{{ __('messages.login') }}</button>
                </div>
            </form>
            <!-- [ Form ] End -->

            <!--<div class="text-center text-muted">
                Don't have an account yet?
                <a href="pages_authentication_register-v1.html">Sign Up</a>
            </div>-->

        </div>
    </div>
@endsection

