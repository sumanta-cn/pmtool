@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center font-weight-bold">{{ __('Login') }}</h5>
            <form class="form-signin" method="POST" action="{{ route('login') }}">
                @csrf
              <div class="form-label-group">
                <input  type="email" id="email" class="form-control" placeholder="Email address" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <label for="email">Email address</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-label-group">
                <input type="password" id="password" class="form-control" placeholder="Password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                <label for="password">Password</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="custom-control-label" for="remember">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Login</button>
              <hr class="my-4">
              @if (Route::has('password.request'))
                    <a class="btn btn-lg btn-google btn-block text-uppercase" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
              @endif
              @if (Route::has('register'))
              <a class="btn btn-lg btn-facebook btn-block text-uppercase" href="{{ route('register') }}"><i class="fas fa-user-plus mr-2"></i> {{ __('Register') }}</a>
              @endif
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
