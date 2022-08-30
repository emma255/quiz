@extends('layouts.auth')

@section('content')
<p class="login-box-msg">Verify Your Email Address</p>

@if (session('resent'))
<div class="alert alert-success" role="alert">
    {{ __('A fresh verification link has been sent to your email address.') }}
</div>
@endif

{{ __('Before proceeding, please check your email for a verification link.') }}
{{ __('If you did not receive the email') }},
<form id="logout-form" action="{{ route('verification.resend') }}" method="POST">
    @csrf
    <div class="row">
        <button class="btn text-primary" href="{{ route('login') }}">
            {{ __('click here to request another') }}
        </button>
    </div>
</form>
@endsection
