@extends('layouts.master')
@section('content')
<div class="container-fluid">
	<div class="card mb-3">	
		<div class="card-header">
	<h3><i class="fas fa-user-check"></i>  View Presence</h3>
		</div>
		<br/>
		<div class="card-body">
			<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
						<strong class="col-sm-4">Class:</strong>{{$presence->seance->name}}
				</div>
				</div>

			<div class="col-sm-4">			
				<div class="form-group">
						<strong class="col-sm-4">Student:</strong>{{$presence->student->lastname}}
				</div>
			</div>

			<div class="col-sm-4">			
				<div class="form-group">
						<strong class="col-sm-4">Presence:</strong>{{$presence->presence}}
				</div>
			</div>
			</div>
			

		
			</div>
		</div>
	</div>
<br>
       <div class="col-md-2 col-xs-2 col1 center-block"> 
          <a href="{{route('presence.index')}}"><button class="btn btn-success center-block"><i class="fas fa-sign-out-alt"></i> return to Student lists </button></a>
        </div>
@endsection 