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

            
          @foreach ($qlist as $question)
            
            <div class="col-lg-12 col-md-12"><!-- one question -->
              <a href="#" class="thumbnail" value="{{ $question->round_num }}">
              <div class="row">
                <div class="col-md-1"><h4><?php echo $i+=1; ?></h4></div>
                <div class="col-md-2"><h4>{{ $question->category }}</h4></div>
                <div class="col-md-2"><h4>{{ $question->title }}</h4></div>
                <div class="col-md-5"><h5>{{ $question->flag }}</h5></div>
                <div class="col-md-1"><h4>{{ $question->points }}</h4></div>
                <div class="col-md-1"><h4>100</h4></div>
              </div>
                
              </a>
            </div><!-- . one question -->
            
          @endforeach
            
        </div>
    </div>


@endsection