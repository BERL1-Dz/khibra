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
      <select  name="formation_id" class="form-control">
        @foreach($formations as $formation)
      	<option value="{{$formation->id}}">{{$formation->name}}</option>
        @endforeach
      </select>
      <br/>
      Professor:
      <select name="professor_id" class="form-control">
        @foreach($professors as $professor)
      	<option value="{{$professor->id}}">{{$professor->name}}</option>
        @endforeach
      </select>
      <br/>

</div>