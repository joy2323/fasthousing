@extends('layouts.admin')
@section('title', 'Registration')

@section('content')
    <div class="page-content--bge5">
        <div class="container-fluid">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                            <a href="#">
                                    <img src="images/icon/fast.png" alt="CoolAdmin" width="20%">
                        </a>
                    </div>

                    
        <div class="login-form">
        {{-- <div class="row">
            <div class="col-md-8">
                <div class="card"> --}}
                    {{-- <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body"> --}}
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-xl-4 offset-xl-3">
                                    <input type="radio" name="role" value="2" class="account-type-radio"/>
                                    <label for="FastRep/House Owner" class=""><i class="icon-material-outline-account-circle"></i>FastRep</label>
                                </div>
                                <div class="col-xl-4">
                                    <input type="radio" name="role" value="3" class="account-type-radio"/>
                                    <label for="Customer" class=""><i class="icon-material-outline-account-circle"></i>Customer</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                    <input id="name" type="text" class="au-input au-input--full{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif

                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="au-input au-input--full{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif

                            </div>
                            <div class="form-group">
                                <label for="phone_no">{{ __('Phone Number') }}</label>
                                    <input id="phone_no" type="phone_no" class="au-input au-input--full{{ $errors->has('phone_no') ? ' is-invalid' : '' }}" name="phone_no" value="{{ old('phone_no') }}" required>

                                    @if ($errors->has('phone_no'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('phone_no') }}</strong>
                                        </span>
                                    @endif

                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>


                                    <input id="password" type="password" class="au-input au-input--full{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>


                                    <input id="password-confirm" type="password" class="au-input au-input--full" name="password_confirmation" required>

                            </div>
                           

                                    <button type="submit" class="au-btn au-btn--block au-btn--green m-b-20">
                                        {{ __('Register') }}
                                    </button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection
