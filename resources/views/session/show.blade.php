@extends('layouts.master')
@section('content')
<div class="container-fluid">
	<div class="card mb-3">	
		<div class="card-header">
	<h3><i class="fas fa-fw fa-school"></i>  View Session</h3>
		</div>
		<br><br>
		<div class="card-body">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
					<div class="row">
						<div class="form-group">
						<strong class="col-sm-2">Name:</strong>

						<br><br>
						<strong class="col-sm-2">Start:</strong>{{$session->start_date}}
						<br><br>
						<strong class="col-sm-2">End:</strong>{{$session->end_date}}
						<br><br>
						<strong class="col-sm-2">Formation:</strong>{{$session->formation->name}}
						<br><br>
						<strong class="col-sm-2">Professor:</strong>{{$session->professor->name}}
						<br><br>
						<strong class="col-sm-2">Stundets:</strong>#{{$session->nbr_max}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

       <div class="col-md-2 col-xs-2 col1 center-block"> 
          <a href="{{route('session.index')}}"><button class="btn btn-success center-block"><i class="fas fa-sign-out-alt"></i> return to Session lists </button></a>
        </div>
@endsection 