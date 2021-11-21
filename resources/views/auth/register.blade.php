@extends('auth.layout')
@section('content')
    <div class="container">
        <div class="myaccount">
            <div class="row flex pd">
                <div class="account-element bd-7">
                    <div class="cmt-title text-center abs">
                        <h1 class="page-title v1">Login</h1>
                    </div>
                    <div class="page-content">
                        <p>Sign in to your account</p>
                        <form class="login-form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label>Username or email address <span class="f-red">*</span></label>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input type="text" id="author" class="form-control bdr" name="name" value="{{ old('name') }}">

                                <label>Username or email address <span class="f-red">*</span></label>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input type="text" id="author" class="form-control bdr" name="email" value="{{ old('name') }}">


                                <label>Password <span class="f-red">*</span></label>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input type="password" class="form-control bdr" name="password">

                                <label>Confirm Password <span class="f-red">*</span></label>
                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input type="password" class="form-control bdr" name="password_confirmation">
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
@endsection
