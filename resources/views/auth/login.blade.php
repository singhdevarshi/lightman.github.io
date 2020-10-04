@extends('auth.master')

@section('content')
   
        
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <div class="card card-login">
          <form class="form" method="POST" action="{{ route('login') }}">
              @csrf
            <div class="card-header card-header-primary text-center">
              <h4 class="card-title">Login</h4>
              <div class="social-line">
                <a href="#pablo" class="btn btn-just-icon btn-link">
                  <i class="fa fa-facebook-square"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link">
                  <i class="fa fa-twitter"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link">
                  <i class="fa fa-google-plus"></i>
                </a>
              </div>
            </div>
            {{-- <p class="description text-center">Or Be Classical</p> --}}
            <div class="card-body">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">mail</i>
                  </span>
                </div>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  placeholder="Email...">

                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="input-group">
                <div class="input-group-prepend">
                      <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                      </span>
                </div>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password...">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                          </span>
                      @enderror
              </div>
            
              <div class="form-check text-center">
                  <label class="form-check-label" for="remember">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                          {{ __('Remember Me') }}
                    <span class="form-check-sign">
                      <span class="check"></span>
                    </span>
                  </label>
              </div>
            
              <div class="footer text-center">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>
              </div>
              <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <a class="" href="{{ route('password.request') }}">
                        {{ __('Forgot Password? /') }}
                    </a>
                    <a class="" href="{{ route('register') }}">
                        {{ __(' Register') }}
                    </a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
               
                

@endsection
