@extends('admin.a_head')

@section('content')
    <div class="panel panel-success">
        <div class="panel-heading">
            <ul class="nav nav-tabs">
                  <li class="col-md-3"><a id="topnav" href="{{ url('/home') }}">Round Config</a></li>
                  <li class="col-md-3"><a id="topnav" href="{{ url('/home/question') }}">Questions</a></li>
                  <li class="active col-md-3"><a id="topnav" href="{{ url('/home/users') }}">Users</a></li>
                  <li class="col-md-3"><a id="topnav" href="{{ url('/home/guide') }}">Guide</a></li>
            </ul>
        </div>

        <div class="panel-body">
          
            <div class="col-lg-3 col-md-3"><!-- one user -->
              <a href="#" class="thumbnail">
                <h3>UTP, NEXXA</h3>
                {{ Html::image('img/prof.png', 'This is you', array('class' => 'img-responsive')) }}
                <p>UTP</p>
                <p>email@email.com</p>
                <p>Current point: </p>
                <p>Status: </p>
              </a>
            </div><!-- . one user -->
            
          
            
        </div>
    </div>


@endsection