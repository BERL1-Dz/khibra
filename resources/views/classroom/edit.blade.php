@extends('layouts.master')
@section('content')
<div class="container-fluid">
	<div class="card mb-3">
		<div class="card-header">
			<h3><i class="fas fa-fw fa-chalkboard"></i> Edit Classroom</h3>
		</div>

	</div>
	<div class="card-body">
		<form method="POST" enctype="multipart/form-data" action="{{ route('classroom.update',$classroom->id) }}" class="form-horizontal">
			{{method_field('PATCH')}}
			@csrf
			Name:
			<input type="text" name="name" id="name" value="{{$classroom->name}}" class="form-control"/>
			<br/>
			Capacity:
			<input type="number" name="capacity" value="{{$classroom->capacity}}" id="capacity" class="form-control"/>
			<br/>
			Desrciption:
			<br/>
			<textarea name="description" id="desrciption"  cols="10" rows="8" class="form-control">{{$classroom->description}}</textarea>
			<br/>
			<div class="card-footer">
             <button type="submit" class="btn btn-primary">Save Changes</button>
             </div>
		</form>
	</div>
</div>
@endsection