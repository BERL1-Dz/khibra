<div class="form-group">
	
       Date:
       <br/>
      <input class="form-control" type="date" name="date">
      <br/>
      </form>
      <br/>
      Amount:
      <input type="number" name="amount" class="form-control">
      <br/>
      Formation:
      <select class="form-control" name="formation_id">
            @foreach($formations as $formation)
      	<option value="{{$formation->id}}">{{$formation->name}}</option>
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
</div>