@extends('admin.a_head')

@section('content')
    <div class="panel panel-success">
        <div class="panel-heading">
            <ul class="nav nav-tabs">
                  <li class="col-md-3"><a id="topnav" href="{{ url('/home') }}">Round Config</a></li>
                  <li class="active col-md-3"><a id="topnav" href="{{ url('/home/question') }}">Questions</a></li>
                  <li class="col-md-3"><a id="topnav" href="{{ url('/home/users') }}">Users</a></li>
                  <li class="col-md-3"><a id="topnav" href="{{ url('/home/guide') }}">Guide</a></li>
            </ul>
        </div>

        <div class="panel-body">
          <div class="container">
            <div class="col-md-4 col-xs-12">
                <div class="row">
                    Question bank
                </div>
            </div>
            <div class="col-md-8 col-xs-12">
                
            </div>
          </div>
            
        </div>
    </div>


@endsection