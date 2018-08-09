@extends('layouts.weblayout')

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="row margin-vert-30">
        <!-- Login Box -->
        <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                    <form class="login-page" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        
                        <div class="login-header margin-bottom-30">
                            <h2>Login to your account</h2>
                            <p>Are you new comer? Click
                                <a href="{{ route('register')}}" class="color-green">HERE</a> to register a new account.
                            </p>
                        </div>

                        <div class="input-group margin-bottom-20 {{ $errors->has('email') ? ' has-error' : '' }}">
                            <span class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </span>
                            <input placeholder="E-mail" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus>
                        </div>
                            
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                        <div class="input-group margin-bottom-20 {{ $errors->has('password') ? ' has-error' : '' }}">
                            <span class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </span>
                            <input placeholder="Password" id="password" type="password" class="form-control" name="password" required>
                        </div>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <div class="row">
                            <div class="form-group col-md-12">
                                <div class="col-md-6">
                                    <label class="checkbox">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Stay signed in</label>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-primary pull-right" type="submit">Login</button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h4>Forget your Password ?</h4>
                        <p>
                            <a class="color-green" href="{{ route('password.request') }}">Click here</a> to reset your password.
                        </p>

                        <!--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>-->
                    </form>
            </div>
        </div>
    </div>
@endsection
