@extends('layouts.master')
@section('content')
 <div class="container-fluid mt--7">
 	<div class="card mb-3">
 		<div class="card-header">
			<h3><i class="fas fa-fw fa-book"></i>View Formation</h3>
		</div>
		<br><br>
		<div class="card-body">
		
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
					<strong class="col-sm-2">Formation:</strong>
					{{$formation->name}}
					<br><br>
					<strong class="col-sm-2">Category:</strong>
					{{$formation->category->name}}
					<br><br>
					<strong class="col-sm-2">Price:</strong>
					{{$formation->price}} DA
					<br><br>
					<strong class="col-sm-2">Duration:</strong>
					{{$formation->durations}} Months
					<br><br>
					
				</div>
			</div>
			</div>
		</div>
 	</div>	
 </div>

 <div class="col-md-2 col-xs-2 col1 center-block ml-6">
          <a href="{{route('formation.index')}}"><button class="btn btn-success center-block"><i class="fas fa-sign-out-alt"></i> return to Formation lists</button></a>
        </div>
@endsection
