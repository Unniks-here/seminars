@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-4">
            <div class="panel panel-default" style="padding: 15px;
            border: 1px solid #ced4da;">
                <div class="panel-heading text-center"><b><font size="5">Login</font></b></div>
                <hr>
                <div class="panel-body">


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
                                <hr> 
                                <a class="btn btn-link" href="{{ route('register') }}">
                                        Register now
                                </a>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password ?
                                </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
