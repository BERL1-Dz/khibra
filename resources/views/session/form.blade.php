<div>
    <div class="row">
        <div class="col-md-6 ml-auto">
	<label>Name:</label>
	<input type="text" class="form-control" name="name">
        </div>
        <div class="col-md-6 ml-auto">
	 <label for=" ">Date start </label>
  	 <input type="date" class="form-control"  name="start_date" value="">
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-6 ml-auto">
     <label for=" ">date end </label>
     <input type="date" class="form-control" name="end_date" value="">
        </div>
        <div class="col-md-6 ml-auto">
	Formation:
	<select class="form-control" name="formation_id">
		@foreach($formations as $formation)
		<option value="{{$formation->id}}">{{$formation->name}}</option>
		@endforeach
	</select>
        </div>
    </div>
	<br/>
  <div class="row">
      <div class="col-md-6 ml-auto">
	Professor:
	<select class="form-control" name="prof_id">
		@foreach($professors as $professor)
		<option value="{{$professor->id}}">{{$professor->name}}</option>
		@endforeach
	</select>
      </div>
      <div class="col-md-6 ml-auto">
	# Max:
	<input class="form-control" type="number" name="nbr_max"  value="">
      </div>
  </div>
</div>
