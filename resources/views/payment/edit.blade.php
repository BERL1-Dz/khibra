@extends('layouts.master')
@section('content')
<div class="container-fluid">
  <div class="card mb-3">
    <div class="card-header">
      <h3><i class="fas fa-fw fa-coins"></i> Edit Student Payments</h3>
    </div>

  </div>
  <div class="card-body">
    <form method="POST" enctype="multipart/form-data" action="{{route('paymentstudent.update',$payment_Student->id)}}" class="form-horizontal">
      {{method_field('PATCH')}}
      @csrf
      Date:
       <br/>
      <input class="form-control" type="date" name="date">
      <br/>
      Amount:
      <input  type="number"  value="{{$payment_Student->amount}}"  name="amount" 
      class="form-control">
      <br/>
      Formation:
      <select class="form-control" name="formation_id">
            @foreach($formation as $formation)
        <option value="{{$formation->id}}">{{$formation->name}}</option>
            @endforeach
      </select>
      <br/>
      Student:
      <select class="form-control" name="student_id">
             @foreach($student as $student)
        <option value="{{$student->id}}">{{$student->lastname}}</option>
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