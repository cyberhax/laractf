@extends('layouts.chal')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading" style="font-family: 'Yatra One', cursive;text-align: center;">Login</div>
                <div class="panel-body">
                
                    <br>
                    <form class="form-horizontal col-md-12" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
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
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="checkbox" name="remember" aria-label="...">
                               </div>
                               <div class="col-md-6">
                                   Remember me
                               </div>
                            </div>
                            <br>
                            <div class="row">
                                <input type="submit" class="btn btn-primary" aria-label="...">
                            </div>
                              
                     
                        </div><!-- /.col-lg-6 -->

                        <div class="form-group">
                            

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
