@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">

                    <div class="row">
                        <div class="col-md-12" style="height: 6px;"></div>

                        <div class="col-md-12">
                            <a href="{{ route('auth-facebook') }}" class="btn btn-default btn-block">Facebook</a>
                        </div>

                        <div class="col-md-12" style="height: 20px;"></div>

                        <div class="col-md-12">
                            <a href="{{ route('auth-google') }}" class="btn btn-default btn-block">Google</a>
                        </div>

                        <div class="col-md-12" style="height: 10px;"></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5">
                            <hr/>
                        </div>
                        <div class="col-sm-2 text-center text-uppercase">
                            <div style="margin-top: 10px;">or</div>
                        </div>
                        <div class="col-sm-5">
                            <hr/>
                        </div>
                    </div>

                    <form role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                   required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password</label>

                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                        </div>

                        <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection