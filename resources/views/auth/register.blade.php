@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
    <div class="col-md-12 col-xs-12">
    <div style=" background-color:#490509 !important; color:#FFF !important; border-radius:10px; box-shadow:#999 5px 4px;"><h3 align="center">CREATE AN ACCOUNT</h3></div>
    <h1>&nbsp;</h1>
        <div class="col-md-4 col-xs-12">
        </div><!-- end col4 -->
        <div class="col-md-4 col-xs-12">

    <form class="form-group" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
        <div class="input-group">
        <div class="input-group-addon"><i class="fa fa-user"></i></div>
        <input id="name" placeholder="Full Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
        </div>
         <div class="form-group">
        <div class="input-group">
        <div class="input-group-addon"><i class="fa fa-at"></i></div>
        <input id="email" placeholder="Email Address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
           </div>
           <div class="form-group">
            <div class="input-group">
          <div class="input-group-addon"><i class="fa fa-lock"></i></div>
          <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
      </div>
             </div>
        <div class="form-group"><label>Already have an account? <a href="{{ route('login') }}" style="font-size:14px !important">Login</a>.&emsp;</label></div>
       <div class="form-group">
        <button type="submit" class="btn-lg btn-danger" style="color:#FFF !important; background-color:#490509 !important;">Register</button></div>
      </form>
        </div><!-- end col4 -->
        <div class="col-md-4 col-xs-12">
        </div><!-- end col-4 -->

    </div><!-- end col-12 -->
    <h1>&nbsp;</h1><h1>&nbsp;</h1>
    </div><!-- end row -->
    </div><!-- end container -->


@endsection
