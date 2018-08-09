@extends('layouts.weblayout')

@section('title', 'Register here')

@section('content')
<!-- === BEGIN CONTENT === -->
<div class="row margin-vert-30">
    <!-- Register Box -->
    <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
        <form class="signup-page" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="signup-header">
                <h2>Register a new account</h2>
                <p>Already a member? Click
                    <a href="{{ route('login')}}" class="color-green">HERE</a> to login to your account.
                </p>
            </div>
            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                <label>Full Name</label>
                <input id="name" class="form-control margin-bottom-20" type="text" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <labell for="email">Email Address
                    <span class="color-red">*</span>
                </label>
                <input id="password" class="form-control margin-bottom-20" type="text" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="row">
                <div class="col-sm-6{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password">Password
                        <span class="color-red">*</span>
                    </label>
                    <input id="password" type="password" class="form-control margin-bottom-20" type="password" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-sm-6">
                    <label for="password-confirm">Confirm Password
                        <span class="color-red">*</span>
                    </label>
                    <input id="password-confirm" class="form-control margin-bottom-20" type="password" name="password_confirmation" required>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <button class="btn btn-primary" type="submit">Register</button>
                </div>
            </div>
        </form>
    </div>
    <!-- End Register Box -->
</div>
@endsection
