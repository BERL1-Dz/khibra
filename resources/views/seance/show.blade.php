@extends('layouts.master')
@section('content')
 <div class="container-fluid mt--7">
 	<div class="card mb-3">
 		<div class="card-header">
			<h3><i class="fas fa-fw fa-book-open"></i>View Class</h3>
		</div>
		<br><br>
		<div class="card-body">
		
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
					<strong class="col-sm-2">Class:</strong>
					{{$seance->name}}
					<br><br>
					<strong class="col-sm-2">Session:</strong>
					{{$seance->session->name}}
					<br><br>
					<strong class="col-sm-2">Classroom:</strong>
					{{$seance->classroom->name}}
					<br><br>
					<strong class="col-sm-2">Date:</strong>
					{{$seance->date}}
					<br><br>
					<strong class="col-sm-2">Duration:</strong>
					{{$seance->duration}}
				</div>
			</div>
			</div>
		</div>
 	</div>	
 </div>

 <div class="col-md-2 col-xs-2 col1 center-block ml-6">
          <a href="{{route('seance.index')}}"><button class="btn btn-success center-block"><i class="fas fa-sign-out-alt"></i> return to Class lists</button></a>
        </div>
@endsection
