@extends('layouts.app')

@section('title',  __('Login'))   

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
                    <p class="text-center">LOGIN TO CONTINUE</p>
                        @if (session()->has('flash'))
                            <div class="alert-info"> {{ session('flash')}} </div>
                        @endif
                    <form id="login-form" action="{{ route('login') }}" method="POST" novalidate="">
                        @csrf
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input type="email" class="form-control underlined" name="email" id="email" placeholder="Your email address" value="{{ old('email') }}" required> 
                                <span class="has-error" role="alert">
                                     <strong>{{ $errors->first('email') }}</strong>
                                </span>
                        </div>
                            
                        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            <label for="password">{{ __('Password') }}</label>
                            <input type="password" class="form-control underlined" name="password" id="password" placeholder="Your password" required> 
                                <span class="has-error" role="alert">
                                      <strong>{{ $errors->first('password') }}</strong>
                                </span>
                        </div>
                            
                        <div class="form-group">
                            <label for="remember">
                                <input class="checkbox" id="remember" type="checkbox">
                                <span>{{ __('Remember Me') }}</span>
                            </label>
                          {{--   <a href="{{ route('password.request') }}" class="forgot-btn pull-right">{{ __('Forgot Your Password?') }}</a> --}}
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">{{ __('Login') }}</button>
                        </div>
                        {{-- <div class="form-group">
                            <p class="text-muted text-center">Do not have an account?
                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            </p>
                        </div> --}}
                    </form>
                </div>
            </div>                
        </div>
    </div>
@endsection
