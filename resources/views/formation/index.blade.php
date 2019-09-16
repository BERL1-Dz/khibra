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
            <td>{{$formation->category_id}}</td>
            <td>{{$formation->durations}}</td>
            <td><div class="row">

          <a href="{{route('formation.edit', $formation->id)}}"class="btn btn-info btn-bordred wave-light"> <i class="fas fa-edit"></i></a>
          </a>
           <a href="{{route('formation.show', $formation->id)}}"  class="btn btn-warning btn-bordred wave-light" data-toggle="modal" data-target="#show"><i class="fa fa-eye" aria-hidden="true"></i></a>

          <form method="POST" action="{{ route('formation.destroy', $formation->id) }}" style="float: left !important;display: contents;">
            @csrf 
           {{ method_field('DELETE') }}
           <button type="submit" id="sa-remove" onclick="return confirm('Are you sure?')" class="wave-effect btn btn-danger btn-bordred wave-light"><i class="fa fa-times"></i></button>
          </form>
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
