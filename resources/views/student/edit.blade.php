@extends('layouts.master')
@section('content')
<div class="container-fluid">
  <div class="card mb-3">
    <div class="card-header">
      <h3><i class="fas fa-fw fa-chalkboard"></i> Edit Student</h3>
    </div>

  </div>
  <div class="card-body">
    <form method="POST" enctype="multipart/form-data" action="{{ route('student.update',$student->id) }}" class="form-horizontal">
      {{method_field('PATCH')}}
      @csrf
      Firstname:
        <input type="text" name="firstname" value="{{$student->firstname}}" class="form-control" placeholder="" />
        <br/>
      Lastname:
        <input type="text" name="lastname" value="{{$student->lastname}}" class="form-control" placeholder="" />
        <br/>
      Gender:
       <select name="gender"  class="form-control">
            <option value="Choose"></option>
            <option @if($student->gender =="Male") selected @endif value="Male">Male</option>
            <option @if($student->gender =="Female") selected @endif value="Female">Female</option>
            <option @if($student->gender =="Other") selected @endif value="Other">Other</option>
      </select>
        <br/>
        Birthday:
         <br/>
       <input type="date" class="form-control" name="birthday">
        <br/>

      Phone:
      <input type="tel" name="phone" value="{{$student->phone}}" class="form-control" placeholder="" />
      <br/>
      Grades:
      <select name="grade_levels" class="form-control">
            <option value="">Choose</option>
            <option value="Bachelor">Bachelor</option>
            <option value="Master">Master</option>
            <option value="Doctorate">Doctorate</option>
      </select>
      <br/>
      Status:
      <select name="status" class="form-control">
            <option value="0">Choose</option>
            <option value="Avaliable">Avaliable</option>
            <option value="Unavaliable">Unavaliable</option>  
      </select>
      <br/>
      <div class="card-footer">
             <button type="submit" class="btn btn-primary">Save Changes</button>
             </div>
    </form>
  </div>
</div>
 

@endsection