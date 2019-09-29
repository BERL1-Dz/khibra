@extends('layouts.master')
@section('content')


<div class="">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">All Presence</h3>
      <div class="col-md-4">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New
        </button>
      </div>
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
    <br/>
    <div class="box-body">
      
            <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Class</th>
            <th scope="col">Student</th>
            <th scope="col">Presence</th>
            <th scope="col">Action </th>
          </tr>
        </thead>
        <tbody>
          @foreach($presences as $presence)
          <tr>
            <th scope="row">{{$presence->id}}</th>
            <td>{{$presence->seance->name}}</td>
            <td>{{$presence->Student->lastname}}</td>
            <td>{{$presence->presence}}</td>
            <td>
              <div class="row">
          <a href="{{route('presence.show', $presence->id)}}"  class="btn btn-warning btn-bordred wave-light"><i class="fa fa-eye" aria-hidden="true"></i></a>

           <form method="POST" action="{{ route('presence.destroy', $presence->id) }}" style="float: left !important;display: contents;">
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
</div>

<div class="links">{{$presences->links()}}</div>
<!-- Add -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Precense </h4>
      </div>
        <form action="{{ route('presence.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
          @include('presence.form')
          <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary">Save</button>
        </div>
          </div>  
        </form>
    </div>
  </div>
</div>
@endsection