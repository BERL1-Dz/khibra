@extends('layouts.master')
@section('content')
<div class="">

  <div class="box">
    <div class="box-header">
      <h3 class="box-title">All Classrooms</h3>
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
            <th scope="col">Name</th>
            <th scope="col">Capacity</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($classrooms as $classroom)
          <tr>
            <th scope="row">{{$classroom->id}}</th>
            <td>{{$classroom->name}}</td>
            <td>{{$classroom->capacity}}</td>
            <td>{{$classroom->description}}</td>
            <td>
              <div class="row">

            <a href="{{route('classroom.edit', $classroom->id)}}"class="btn btn-info btn-bordred wave-light"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                
           <a href="#" class="btn btn-warning btn-bordred wave-light" data-toggle="modal" data-target="#show"><i class="fa fa-eye" aria-hidden="true"></i></a>

          <form method="POST" action="{{route('classroom.destroy', $classroom->id)}}">
            @csrf 
           {{ method_field('DELETE') }}
           <button type="submit" id="sa-remove" onclick="return confirm('Are you sure?')" class="wave-effect btn btn-danger btn-bordred wave-light"><i class="fa fa-times"></i></button>
          </form>
            </div>
          </td>
          </tr>
          @endforeach  
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
        <h4 class="modal-title" id="myModalLabel">New Classroom</h4>
      </div>
        <form action="{{route('classroom.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
              @include('classroom.form')
             <div class="modal-footer">
        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        	<button type="submit" class="btn btn-primary">Save</button>
      		</div>
          </div>  
        </form>     
    </div>
  </div>
</div>

	<!-- Edit -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Classroom</h4>
      </div>
        <form action="{{ route('classroom.update','test')}}" method="post" enctype="multipart/form-data">
          {{method_field('PATCH')}}
          @csrf
          <div class="modal-body">
            <input type="hidden" name="" id="" value="">
              @include('classroom.form')
          </div>  
           <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Changes</button>
      </div>
        </form>
    </div>
  </div>
</div>
	
	<!--Delete-->
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
        <form action="{{ route('classroom.destroy','test')}}" method="post" enctype="multipart/form-data">
          {{method_field('DELETE')}}
          @csrf
          <div class="modal-body">
            <p class="text-center">
              Are you sure you want to delete this?

            </p>
            <input type="hidden" name="" id="" value="">
            
          </div>  
           <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">No!</button>
        <button type="submit" class="btn btn-warning">Yes, Delete!</button>
      </div>
        </form>
      
     
    </div>
  </div>
</div>


</div>
@endsection 