<div class="form-group">
	
	Session:
	<select name="session_id" class="form-control">
		@foreach($sessions as $session)
		<option value="{{$session->id}}">{{$session->start_date}}</option>
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
	<form class="form-group">
    Date:
      <br/>
      <input type="date" name="date" class="form-control">
      <br/>
     </form>
     <br/>
    Duration:
    <input type="number" step="0.001" name="duration" class="form-control">
</div>