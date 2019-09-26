@extends('layouts.master')
@section('content')
<div class="container-fluid">
	<div class="card mb-3">
		<div class="card-header">
			<h3><i class="fas fa-fw fa-school"></i> Edit Session</h3>
		</div>

	</div>
	<div class="card-body">
		<form method="POST" enctype="multipart/form-data" action="{{ route('session.update',$session->id) }}" class="form-horizontal">
			{{method_field('PATCH')}}
			@csrf
			<label>Name</label>
			<input type="text" class="form-control" name="name" value="{{$session->name}}">
			<br/>
			
			<label for="">Date start </label>
  	        <input type="date" class="form-control"  name="start_date" value="{{$session->start_date}}">
			<br/>

			<label for=" ">date end </label>
    		 <input type="date" class="form-control" name="end_date" value="{{$session->end_date}}">
    		 <br/>
    		 Formation:
			<select class="form-control" name="formation_id">
			@foreach($formations as $formation)
			<option selected="" value="{{$formation->id}}">{{$formation->name}}</option>
			@endforeach
			</select>
			<br/>
			Professor:
			<select class="form-control" name="prof_id">
			@foreach($professors as $professor)
			<option  value="{{$professor->id}}">{{$professor->name}}</option>
			@endforeach
			</select>
			<br/>
			# Max:
			<input class="form-control" type="number" name="nbr_max"  value="{{$session->nbr_max}}">
			<br/>
			<div class="card-footer">
             <button type="submit" class="btn btn-primary">Save Changes</button>
             </div>
		</form>
	</div>
</div>
@endsection