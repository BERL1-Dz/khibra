<div class="form-group">
	Sceance:
	<select class="form-control" name="seance_id">
		@foreach($seances as $seance)
		<option value="{{$seance->id}}">{{$seance->id}}</option>
		@endforeach
	</select>
	<br/>
	Student:
	<select class="form-control" name="student_id">
		@foreach($students as $student)
		<option value="{{$student->id}}">{{$student->lastname}}</option>
		@endforeach
	</select>
	<br/>
	Presence:
	<select class="form-control" name="presence">
		<option>Present</option>
		<option>Absent</option>
	</select>
</div>