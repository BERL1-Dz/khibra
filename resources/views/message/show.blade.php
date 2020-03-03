@extends('layouts.master')
@section('content')
<div class="container-fluid mt--7">
	<div class="card mb-3">	
		<div class="card-header">
	<h3><i class="fas fa-envelope"></i>  View Message</h3>
		</div>
		<br/>
		<div class="card-body">
			<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
						<strong class="col-sm-4">Name:</strong>
						{{$message->name}}
				</div>
				</div>

			<div class="col-sm-4">			
				<div class="form-group">
						<strong class="col-sm-4">Email:</strong>
						{{$message->email}}
				</div>
			</div>
			</div>
			<br/>
			<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
						<strong class="col-sm-4">Message:</strong>
						{{$message->messages}}
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
       <div class="col-md-2 col-xs-2 col1 center-block ml-6">
          <a href="{{route('message.index')}}"><button class="btn btn-success center-block"><i class="fas fa-sign-out-alt"></i> return to Messages lists </button></a>
        </div>
@endsection 
