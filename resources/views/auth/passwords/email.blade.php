@extends('layouts.app')

@section('title', __('Reset Password'))

@section('content')
<div class="auth">
        <div class="auth-container">
            <div class="card">
                <header class="auth-header">
                    <h1 class="auth-title">
                        <div class="logo">
                            <span class="l l1"></span>
                            <span class="l l2"></span>
                            <span class="l l3"></span>
                            <span class="l l4"></span>
                            <span class="l l5"></span>
                        </div> Control Docente </h1>
                </header>
                <div class="auth-content">
                    <p class="text-center">PASSWORD RECOVER</p>
                    <p class="text-muted text-center">
                        <small>Enter your email address to recover your password.</small>
                    </p>
                    <form id="reset-form" action="{{ route('password.email') }}" method="POST" novalidate="">
                        <div class="form-group">
                            <label for="email1">{{ __('E-Mail Address') }}</label>
                            <input type="email" class="form-control underlined" name="email1" id="email1" placeholder="Your email address" required> </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">{{ __('Send Password Reset Link') }}</button>
                        </div>
                        <div class="form-group clearfix">
                            <a class="pull-left" href="{{ route('login') }}">return to {{ __('Login') }}</a>
                            <a class="pull-right" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
