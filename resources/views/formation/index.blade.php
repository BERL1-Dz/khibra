@extends('layouts.master')
@section('content')
<div class="">

  <div class="box">
    <div class="box-header">
      <h3 class="box-title">All Formations</h3>
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
            <th scope="col">Price</th>
            <th scope="col">Category</th>
            <th scope="col">Durations</th>
            <th scope="col">Action</th>
            <!--<th scope="col">Image</th>-->
            
          </tr>
        </thead>
        <tbody>
           @foreach($formations as $formation)
                
          <tr>
            <th scope="row">{{$formation->id}}</th>
            <td>{{$formation->name}}</td>
            <td>{{$formation->price}}</td>
            <td>{{$formation->category->name}}</td>
            <td>{{$formation->durations}}</td>
            <td><div class="row">

          <a href="{{route('formation.edit', $formation->id)}}" class="btn btn-info">
          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
              <span>Edit</span>            
          </a>
           <a href="#" class="btn btn-warning">
              <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
              <span><strong>View</strong></span>            
          </a>
           <a href="#" class="btn btn-danger a-btn-slide-text">
          <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
              <span>Delete</span>            
          </a>
            </div></td>
          </tr>
           
           @endforeach

        </table>

    </div>
  </div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Add New 
</button>

<!-- Add -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">New Formation</h4>
      </div>
        <form action="{{ route('formation.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <input type="hidden" name="formation_id" id="for_id" value="">
              @include('formation.form')
          </div>  
           <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
        </form>     
    </div>
  </div>
</div>
@endsection