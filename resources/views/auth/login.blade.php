@extends('layouts.app')
@section('content')
@desktop
<link href="{{ asset('css/css.css') }}" rel="stylesheet">
<div class="container2">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2><center><strong>Job Seeker Login</strong></center></h2>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
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
                                    <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group butnlink">
                            <div>
                                <div>
                                    <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="butnlink">
                                <button type="submit" class="btn btn-primary button1">Login</button>
                                <br>
                                <a class="btn btn-link fyp" href="{{ route('password.request') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@enddesktop
@mobile
<link href="{{ asset('css/css.css') }}" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2><center><strong>Job Seeker Login</strong></center></h2>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group butnlink">
                            <div>
                                <div>
                                    <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="butnlink">
                                <button type="submit" class="btn btn-primary button1">Login</button>
                                <br>
                                <a class="btn btn-link fyp" href="{{ route('password.request') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endmobile
@endsection
