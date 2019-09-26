@extends('layouts.master')
@section('content')
<div class="container-fluid">
	 <div class="card mb-3">
    <div class="card-header">
      <h3><i class="fas fa-fw fa-book-open"></i> Edit Seance</h3>
    </div>

  </div>
  <div class="card-body">
  	<form method="POST" enctype="multipart/form-data" action="{{ route('seance.update',$seance->id) }}" class="form-horizontal">
      {{method_field('PATCH')}}
      @csrf
      
  <label>Name:</label>
  <input type="text" name="name" class="form-control" value="{{$seance->name}}">
  <br/>
  Session:
	<select name="session_id" class="form-control">
		@foreach($sessions as $session)
		<option value="{{$session->id}}">{{$session->name}}</option>
		@endforeach
	</select>
	<br/>
	Classroom:
	<select name="classroom_id" class="form-control">
		@foreach($classrooms as $classroom)
		<option  value="{{$classroom->id}}">{{$classroom->name}}</option>
		@endforeach
	</select>
	<br/>
    Date:
    <input type="date" name="date" class="form-control" value="{{$seance->date}}">
     <br/>
    Duration:
    <input value="{{$seance->duration}}" type="number" name="duration" class="form-control">
    <br/>
    <div class="card-footer">
       <button type="submit" class="btn btn-primary">Save Changes</button>
     </div>
 </form>
  </div>

</div>
@endsection