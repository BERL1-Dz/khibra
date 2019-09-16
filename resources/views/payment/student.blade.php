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
      <select class="form-control" name="formation">
            @foreach($formations as $formation)
      	<option value="{{$formation->id}}">{{$formation->name}}</option>
            @endforeach
      </select>
      <br/>
      Student:
      <select class="form-control" name="student">
             @foreach($students as $student)
      	<option value="{{$student->id}}">{{$student->name}}</option>
            @endforeach
      </select>
      <br/>
      Description:
      <textarea class="form-control" name="des"></textarea>

</div>