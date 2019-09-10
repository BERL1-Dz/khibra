<div>

	 <label for=" ">Date start </label>
  	 <input type="date" class="form-control"  name="start_date" value="">

    <br/>
     <label for=" ">date end </label>
     <input type="date" class="form-control" name="end_date" value="">
     <br/>

	Formation:
	
	<select class="form-control" name="">
		@foreach($formations as $formation)
		<option value="{{$formation->id}}">{{$formation->name}}</option>
		@endforeach
	</select>
		
	<br/>

	Professor:
	<select class="form-control" name="">
		@foreach($professors as $professor)
		<option value="{{$professor->id}}">{{$professor->name}}</option>
		@endforeach
	</select>

	<br/>


</div>