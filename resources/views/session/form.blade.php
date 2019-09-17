<div>

	 <label for=" ">Date start </label>
  	 <input type="date" class="form-control"  name="start_date" value="">

    <br/>
     <label for=" ">date end </label>
     <input type="date" class="form-control" name="end_date" value="">
     <br/>

	Formation:
	<select class="form-control" name="formation_id">
		@foreach($formations as $formation)
		<option value="{{$formation->id}}">{{$formation->name}}</option>
		@endforeach
	</select>
		
	<br/>

	Professor:
	<select class="form-control" name="prof_id">
		@foreach($professors as $professor)
		<option value="{{$professor->id}}">{{$professor->name}}</option>
		@endforeach
	</select>

	<br/>

	# Max:
	<input class="form-control" type="number" name="nbr_max"  value="">

</div>