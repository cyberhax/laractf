@extends('participant.p_head')

@section('content')
<div class="panel panel-info" style="text-align: center">
        <div class="panel-heading">
            <ul class="nav nav-tabs">
                  <li class="col-md-3"><a href="{{ url('/home') }}">Team Profile</a></li>
                  <li class="col-md-3"><a href="{{ url('/home/noticeboard') }}">Noticeboard</a></li>
                  <li class="active col-md-3"><a href="{{ url('/home/challenge') }}">Challenge</a></li>
                  <li class="col-md-3"><a style="color:red" href="{{ url('/home/danger') }}">Danger!!</a></li>
            </ul>
        </div>

        <div class="panel-body" >
            <div class="container">
                <form>
                    
                    <div class="row" style="text-align: left;">
                            Q1
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-md-8"> 

                          <input type="text" required>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Name</label>
                        </div>
                        <button type="submit" class="btn btn-success col-md-3 col-md-offset-1">
                            Lets Go!!
                        </button>
                    </div>           
                </form>
                
            </div>
        </div>
    </div>

@endsection