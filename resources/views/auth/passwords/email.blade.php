@extends('layouts.auth')

@section('content')
<p class="login-box-msg">Reset Password.</p>
<form method="POST" action="{{ route('password.email') }}">
    @csrf
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <div class="input-group mb-3">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus placeholder="E-Mail Address">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="feather feather-mail"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">{{ __('Send Password Reset Link') }}</button>
        </div>
        <!-- /.col -->
    </div>
    <p class="mt-3 mb-1">
        <a href="{{ route('login') }}">{{ __('Back to login') }}</a>
    </p>
</form>
@endsection
