@extends('auth.master')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user-type" class="col-md-4 col-form-label text-md-right">{{ __('User Type') }}</label>

                            <div class="col-md-4 btn-group dropright">
                                                                 
                                <select id="countrySelect" size="1" name="usertype" onchange="makeSubmenu(this.value)">
                                    <option value="" disabled selected>Select</option>
                                    <option value="{{ '1' }}">User</option>
                                    <option value="{{ '2' }}">Vendor</option>
                                   
                                </select>
                                                                        
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="user-type" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-4 btn-group dropright">
                                <select id="countrySelect" size="1" name="city" onchange="makeSubmenu(this.value)">
                                    <option value="" disabled selected>Select</option>
                                    <option value="{{ 'Varanasi' }}">Varanasi</option>
                                    <option value="{{ 'Lucknow' }}">Lucknow</option>
                                    <option value="{{ 'Bhopal' }}">Bhopal</option>
                                </select>
                                   
                            </div>
                        </div>
                       
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
 <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-8 ml-auto mr-auto">
        <div class="card card-register">
            <form method="POST" action="{{ route('register') }}">
             {{ csrf_field() }}
                <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Register</h4>
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
            
            <div class="card-body">
                <div class="row">
                  
                    <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">face</i>
                          </span>
                        </div>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full name...">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group ">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">phone</i>
                            </span>
                        </div>
                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="Contact No...">

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                <div class="input-group ">
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
                </div>
                <div class="row">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            <i class="material-icons">lock_outline</i>
                            </span>
                        </div>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password...">

                            @error('password')
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
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password...">
                    </div>
                </div>
                <div class="row">
                    <div class=" input-group col-md-6 mb-3">
                        <select class=" custom-select @error('usertype') is-invalid @enderror" name="usertype" required>
                            <option value="" disabled selected>User Type...</option>
                            <option value="{{ '1' }}">User</option>
                            <option value="{{ '2' }}">Vendor</option>
                        </select>
                        @error('usertpye')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="input-group col-md-6 mb-3">
                        <select class=" custom-select  @error('city') is-invalid @enderror" name="city" required>
                            <option value="" disabled selected>City...</option>
                            <option value="{{ 'Varanasi' }}">Varanasi</option>
                            <option value="{{ 'Lucknow' }}">Lucknow</option>
                            <option value="{{ 'Bhopal' }}">Bhopal</option>
                        </select>
                        @error('city')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <div class="footer text-center">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <a class="" href="/">
                            {{ __('Home /') }}
                        </a>
                        <a class="" href="{{ route('login') }}">
                            {{ __('Login') }}
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
