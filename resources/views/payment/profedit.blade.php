@extends('layouts.master')
@section('content')
<div class="container-fluid">
  <div class="card mb-3">
    <div class="card-header">
      <h3><i class="fas fa-fw fa-coins"></i> Edit Student Professor</h3>
    </div>

  </div>
  <div class="card-body">
    <form method="POST" enctype="multipart/form-data" action="{{route('paymentprof.update',$payment_Professor)}}" class="form-horizontal">
      {{method_field('PATCH')}}
      @csrf
      Date:
       <br/>
      <input class="form-control" type="date" name="date">
      <br/>
      Amount:
      <input  type="number"  value="{{$payment_Professor->amount}}"  name="amount" 
      class="form-control">
      <br/>
      Formation:
      <select class="form-control" name="formation_id">
        @foreach($formation as $formation)
        <option value="{{$formation->id}}">{{$formation->name}}</option>
          @endforeach  
      </select>
      <br/>
      Professor:
      <select class="form-control" name="professor_id">
            @foreach($professor as $professor) 
        <option value="{{$professor->id}}">{{$professor->name}}</option>
            @endforeach
      </select>
      <div class="card-footer">
             <button type="submit" class="btn btn-primary">Save Changes</button>
             </div>
      <br>
    </form>
  </div>
</div>

@endsection