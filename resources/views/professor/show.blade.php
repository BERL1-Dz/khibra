@extends('layouts.master')
@section('content')
<div class="container-fluid mt--7">
	<div class="card mb-3">	
		<div class="card-header">
	<h3><i class="fas fa-fw fa-chalkboard-teacher"></i>  View Professor</h3>
		</div>
		<br><br>
		<div class="card-body">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
					<div class="row">
						<div class="form-group">
						<strong class="col-sm-2">Name:</strong>{{$professors->name}}
						<br><br>
						<strong class="col-sm-2">Phone:</strong>{{$professors->phone_number}}
						<br><br>
						<strong class="col-sm-2">Adress:</strong>{{$professors->address}}
						<br><br>
						<strong class="col-sm-2">Email:</strong>{{$professors->email}}
						<br><br>
						<strong class="col-sm-2">Desc:</strong>{{$professors->description}}
						<br><br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

       <div class="col-md-2 col-xs-2 col1 center-block ml-6">
          <a href="{{route('professor.index')}}"><button class="btn btn-success center-block"><i class="fas fa-sign-out-alt"></i> return to Professor lists </button></a>
        </div>
@endsection 
