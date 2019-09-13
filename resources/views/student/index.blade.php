@extends('layouts.master')
@section('content')
<div class="">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">All Students</h3>
      </div>
         <br/>
    <div class="col-md-4 search">
      <form action="/search" method="GET">
        <div class="input-group">
          <input type="search" name="search" class="form-control">
          <span class="input-group-prepend">
            <button type="submit" class="btn btn-primary bouton">Search</button>
          </span>
        </div>
      </form>
    </div>

<div class="box-body">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Gender</th>
      <th scope="col">Birthday</th>
      <th scope="col">Phone</th>
      <th scope="col">Scholar Level</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
    <tr>
      <th scope="row">{{$student->id}}</th>
      <td>{{$student->firstname}}</td>
      <td>{{$student->lastname}}</td>
      <td>{{$student->gender}}</td>
      <td>{{$student->birthday}}</td>
      <td>{{$student->phone}}</td>
      <td>{{$student->grade_levels}}</td>
      <td>{{$student->status}}</td>
      <td>
             <div class="row">
          <a href="{{route('student.edit', $student->id)}}"class="btn btn-info btn-bordred wave-light"> <i class="fas fa-edit"></i></a>

          <a href="#" class="btn btn-warning btn-bordred wave-light" data-toggle="modal" data-target="#show"><i class="fa fa-eye" aria-hidden="true"></i></a>

          <form method="POST" action="{{route('student.destroy', $student->id)}}">
            @csrf 
           {{ method_field('DELETE') }}
           <button type="submit" id="sa-remove" onclick="return confirm('Are you sure?')" class="wave-effect btn btn-danger btn-bordred wave-light"><i class="fa fa-times"></i></button>
          </form>

            </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal">
  Add New 
</button>

<!-- Add -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">New Student</h4>
      </div>
        <form action="{{route('student.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
              @include('student.form')
             <div class="modal-footer">
        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        	<button type="submit" class="btn btn-primary">Save</button>
      		</div>
          </div>  
        </form>     
    </div>
  </div>
</div>

</div>
@endsection