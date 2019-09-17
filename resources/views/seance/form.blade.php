<div class="form-group">
	
	Session:
	<select class="form-control">
		@foreach($sessions as $session)
		<option value="{{$session->id}}">{{$session->name}}</option>
		@endforeach
	</select>
	<br/>
	Classroom:
	<select class="form-control">
		@foreach($classrooms as $classroom)
		<option value="{{$classroom->id}}">{{$classroom->name}}</option>
		@endforeach
	</select>
	<br/>
	<form class="form-group">
    Date:
      <br/>
      <input type="date" name="date" class="form-control">
      <br/>
     </form>
     <br/>
    Duration:
    <input type="number" name="duration" class="form-control">
</div>