@extends('layout')

@section('content')
<div class="container">
    <div class="myaccount">
        <ul class="breadcrumb v3">
            <li><a href="#">Home</a></li>
            <li class="active">My Account</li>
        </ul>
        <div class="row flex pd">
            <div class="account-element bd-7">
                <div class="cmt-title text-center abs">
                    <h1 class="page-title v1">Login</h1>
                </div>
                <div class="page-content">
                    <p>Sign in to your account</p>
                    <form class="login-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label>Username or email address <span class="f-red">*</span></label>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input type="text" id="author" class="form-control bdr" name="email">
                            <label>Password <span class="f-red">*</span></label>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input type="password" class="form-control bdr" name="password">
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <div class="flex lr">
                            <button type="submit" class="btn btn-submit btn-gradient">
                                Login
                            </button>
                        </div>
                    </form>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>



























    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
