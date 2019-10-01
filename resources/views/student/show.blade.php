@extends('layouts.master')
@section('content')
<div class="container-fluid mt--7">
	<div class="card mb-3">	
		<div class="card-header">
	<h3><i class="fas fa-fw fa-user-graduate"></i>  View Student</h3>
		</div>
		<br/>
		<div class="card-body">
			<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
						<strong class="col-sm-4">Firstname:</strong>{{$student->firstname}}
				</div>
				</div>

			<div class="col-sm-4">			
				<div class="form-group">
						<strong class="col-sm-4">Lastname:</strong>{{$student->lastname}}
				</div>
			</div>
			</div>
			<br/>
			<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
						<strong class="col-sm-4">Gender:</strong>{{$student->gender}}
				</div>
				</div>

			<div class="col-sm-4">			
				<div class="form-group">
						<strong class="col-sm-4">Birthday:</strong>{{$student->birthday}}
				</div>
			</div>
			</div>
			<br/>
				<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
						<strong class="col-sm-4">Phone:</strong>{{$student->phone}}	
				</div>
				<br>
				<div class="form-group">
						<strong class="col-sm-4">Grade:</strong>{{$student->grade_levels}}	
				</div>
				</div>

			<div class="col-sm-4">			
				<div class="form-group">
					<strong class="col-sm-4">Status:</strong>
					{{$student->status}}		
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
<br>
       <div class="col-md-2 col-xs-2 col1 center-block ml-6">
          <a href="{{route('student.index')}}"><button class="btn btn-success center-block"><i class="fas fa-sign-out-alt"></i> return to Student lists </button></a>
        </div>
@endsection 
