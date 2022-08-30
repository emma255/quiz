@extends('layouts.auth')

@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="input-group mb-3">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus placeholder="Name">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="feather feather-user"></span>
            </div>
        </div>
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="input-group mb-3">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus placeholder="E-Mail Address">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="feather feather-mail"></span>
            </div>
        </div>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="input-group mb-3">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="feather feather-lock"></span>
            </div>
        </div>
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="input-group mb-3">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="feather feather-lock"></span>
            </div>
        </div>
    </div>
    <div class="col-md-12 mb-1">
        <h6 class="mb-0">Already have an account?
            <a class="text-primary" href="{{ route('login') }}">
                {{ __('Login') }}
            </a>
            | @if (Route::has('password.request'))
            <a class="text-primary" href="{{ route('password.request') }}">
                {{ __('Forgot Password') }}
            </a>
            @endif
        </h6>
    </div>

    <button class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-block">Create Account</button>
</form>
@endsection
