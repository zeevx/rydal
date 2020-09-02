@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-12 col-xs-12">
        <h1>&nbsp;</h1>
        <div class="col-md-4 col-xs-12">
        </div><!-- end col4 -->
        <div class="col-md-4 col-xs-12">
        <h3 align="center">Login here <i class="fa fa-arrow-circle-down"></i></h3>
        <form class="form-group" method="POST" action="{{ route('login') }}">
            @csrf
             <div class="form-group">
      <div class="input-group">
      <div class="input-group-addon"><i class="fa fa-user"></i></div>
      <input id="email" placeholder="Email Address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
      @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>
             </div>
      <div class="form-group">
        <div class="input-group">
      <div class="input-group-addon"><i class="fa fa-lock"></i></div>
      <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
      @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>
         </div>
         <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>
    <div class="form-group"><label><a href="{{ route('register') }}" style="font-size:14px !important">Register</a>&emsp; @if (Route::has('password.request'))
        <a style="font-size:14px !important" href="{{ route('password.request') }}">
            |&emsp; {{ __('Forgot Your Password?') }}
        </a>
    @endif</label></div>
      <div class="form-group">
      <button type="submit" class="btn-lg btn-danger" style="color:#FFF !important; background-color:#490509 !important;"> {{ __('Login') }}</button></div>
    </form>
        </div><!-- end col4 -->
        <div class="col-md-4 col-xs-12">
        </div><!-- end col-4 -->

    </div><!-- end col-12 -->
    <h1>&nbsp;</h1><h1>&nbsp;</h1>
    </div><!-- end row -->
    </div><!-- end container -->

@endsection
