
@extends('participant.p_head')

@section('content')
    <div class="panel panel-info" style="text-align: center">
        <div class="panel-heading">
            <ul class="nav nav-tabs">
                  <li class="col-md-3"><a href="{{ url('/home') }}">Team Profile</a></li>
                  <li class="active col-md-3"><a href="{{ url('/home/noticeboard') }}">Noticeboard</a></li>
                  <li class="col-md-3"><a href="{{ url('/home/challenge') }}">Challenge</a></li>
                  <li class="col-md-3"><a style="color:red" href="{{ url('/home/danger') }}">Danger!!</a></li>
            </ul>
        </div>

        <div class="panel-body">
          
			<table class="table table-hover">
				<thead>
					<tr class="warning">
					
						<td class="col-md-1">No</td>
						<td class="col-md-2">Q No</td>
						<td class="col-md-6">Hints/notice</td>
						<td class="col-md-3">Points</td>
					
					
					</tr>
				</thead>
				
				<tbody>
					<tr>
						<td class="col-md-1">No</td>
						<td class="col-md-2">Q No</td>
						<td class="col-md-6">Hints/notice</td>
						<td class="col-md-3">Points</td>
					</tr>
					<tr>
						<td class="col-md-1">No</td>
						<td class="col-md-2">Q No</td>
						<td class="col-md-6">Hints/notice</td>
						<td class="col-md-3">Points</td>
					</tr>
				</tbody>
				
			
				
					
				
			</table>
            
        </div>
    </div>


@endsection


