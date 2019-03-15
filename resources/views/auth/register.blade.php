@extends('layouts.app')

@section('title', __('Register') )

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
                    <p class="text-center">SIGNUP TO GET INSTANT ACCESS</p>
                    <form id="signup-form" action="{{ route('register') }}" method="POST" novalidate="">
                        <div class="form-group">
                            <label for="firstname">{{ __('Name') }}</label>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control underlined" name="firstname" id="firstname" placeholder="Enter firstname" required=""> </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control underlined" name="lastname" id="lastname" placeholder="Enter lastname" required=""> </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input type="email" class="form-control underlined" name="email" id="email" placeholder="Enter email address" required=""> </div>
                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="password" class="form-control underlined" name="password" id="password" placeholder="Enter password" required=""> </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control underlined" name="password_confirmation" id="password_confirmation" placeholder="Re-type password" required=""> </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="agree">
                                <input class="checkbox" name="agree" id="agree" type="checkbox" required="">
                                <span>Agree the terms and
                                    <a href="#">policy</a>
                                </span>
                            </label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">{{ __('Register') }}</button>
                        </div>
                        <div class="form-group">
                            <p class="text-muted text-center">Already have an account?
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>               
        </div>
    </div>
@endsection
