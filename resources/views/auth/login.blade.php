@extends('layouts.auth')

@section('content')
<p class="login-box-msg">Sign in to start your session</p>

<form method="POST" action="{{ route('login') }}">
    @csrf
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
    <div class="row">
        <div class="col-8">
            <div class="icheck-primary">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">
                    Remember me
                </label>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>
        <!-- /.col -->
        @if (Route::has('password.request'))
        <a class="btn-sm btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot password') }}
        </a>
        @endif
    </div>
</form>
@endsection
