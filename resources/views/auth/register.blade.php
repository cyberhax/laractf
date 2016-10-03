@extends('layouts.chal')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading" style="font-family: 'Yatra One', cursive;text-align:center; ">Register</div>
                <div class="panel-body">
                <br>
                    <form class="form-horizontal col-md-12" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-md-12"> 
                          <input id="name" type="text" name="name" value="{{ old('name') }}" required>
                           @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Team Name</label>
                        </div>
                        <div class="form-group{{ $errors->has('uniname') ? ' has-error' : '' }} col-md-12"> 
                          <input id="uniname" type="text" name="uniname" value="{{ old('uniname') }}" required>
                           @if ($errors->has('uniname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('uniname') }}</strong>
                                    </span>
                            @endif
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>University Name</label>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-md-12"> 
                          <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                           @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Email Address</label>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-md-12"> 
                          <input id="password" type="password" name="password" required>
                           @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Password</label>
                        </div>
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} col-md-12"> 
                          <input id="password-confirm" type="password" name="password_confirmation" required>
                           @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Confirm Your Password</label>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
