@extends('participant.p_head')

@section('content')
    <div class="panel panel-info" style="text-align: center">
        <div class="panel-heading">
            <ul class="nav nav-tabs">
                  <li class="active col-md-3"><a href="{{ url('/home') }}">Team Profile</a></li>
                  <li class="col-md-3"><a href="{{ url('/home/noticeboard') }}">Noticeboard</a></li>
                  <li class="col-md-3"><a href="{{ url('/home/challenge') }}">Challenge</a></li>
                  <li class="col-md-3"><a style="color:red" href="{{ url('/home/danger') }}">Danger!!</a></li>
            </ul>
        </div>

        <div class="panel-body" >
          <div class="container">
            <div class="col-md-4 col-xs-12">
                <div class="row">
                    <h1>UTP, NEXXA</h1>
                </div>
                <div class="row">
                  {{ Html::image('img/prof.png', 'This is you') }}
                </div>
                <div class="row">Email: </div>
                <div class="row">Tournament ID: N/A</div>
            </div>
            
            <div class="col-md-4 col-xs-12">
                <br>
                <br>
                <div class="row">Current round</div>
                <br>
                <div class="row">Current points</div>
                <br>
                <div class="row">Question Answered</div>
                <br>
                <div class="row">graph</div>
            </div>
            <div class="col-md-4 col-xs-12">
                <br>
                <br>
                <div class="row">Current standing: Active</div>
                <br>
                <div class="row">Total Points</div>
                <br>
                <div class="row">Total Question Answered</div>
                <br>
                <div class="row">Total Attempt</div>
                <br>
                <div class="row">Countdown</div>
                <br>
            </div>
          </div>
            
        </div>
    </div>


@endsection