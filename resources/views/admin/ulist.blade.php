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
          @foreach ($userslist as $users)
            
          
            <div class="col-lg-3 col-md-3"><!-- one user -->
              <a href="#" class="thumbnail" value="{{ $users->id }}">
                <h4 style="text-align: center;">{{ $users->name }}</h4>
                {{ Html::image('img/prof.png', 'This is you', array('class' => 'img-responsive', 'for' => 'bar')) }}
                <p>{{ $users->org }}</p>
                <p>{{ $users->user_email }}</p>
                <p>Current point: </p>
                <p>Status: </p>
                @if ($users['a_p'] == '1')
                <button type="button" class="btn btn-success btn-block disabled">Admin</button>
                @elseif ($users['a_p'] == '0')
                <button type="button" class="btn btn-info btn-block disabled">Participant</button>
                @endif
              </a>
            </div><!-- . one user -->
            
          @endforeach
            
        </div>
    </div>


@endsection