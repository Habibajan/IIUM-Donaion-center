{{-- @extends('layouts.app') --}}
@extends('welcome')
@section('content')
<br><br>
<br>

<div class="container" style="margin-left:400px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="margin-left:150px;" class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                                <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-7">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>
{{--                              
 
                        <div class="form-group row">
                            <label for="idNo" class="col-md-6 col-form-label text-md-right">{{ __('Matric/Staff No') }}</label>

                            <div class="col-md-7">
                                <input id="idNo" type="text" class="form-control @error('idNo') is-invalid @enderror" name="idNo" value="{{ old('idNo') }}" required autocomplete="idNo" autofocus>

                                @error('idNo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>
                        <div class="form-group row">
                            <label for="phone" class="col-md-6 col-form-label text-md-right">{{ __('Phone No') }}</label>

                            <div class="col-md-7">
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br> --}}
          

                        <div class="form-group row">
                            <label for="email" class="col-md-6 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>
                               


                        <div class="form-group row">
                            <label for="password" class="col-md-6 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                                <br>
                                
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-6 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-7">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                              <br>
                               
                                


                        <div class="form-group row mb-0">
                            <div class="col-md-7 offset-md-6">
                                <button style="margin-left:150px;" type="submit" class="btn btn-primary btn-lg active">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><br>
<br>
<br>
<br>
<br>

@endsection
