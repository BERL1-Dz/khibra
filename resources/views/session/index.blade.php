@extends('layouts.master')
@section('content')
<div class="">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">All Sessions</h3>
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
            <th scope="col">Start</th>
            <th scope="col">End</th>
            <th scope="col">Students</th>
            <th scope="col">Formations</th>
            <th scope="col">Professors</th>
            <th scope="col">Action </th>
          </tr>
        </thead>
        <tbody>
          @foreach($sessions as $session)
          <tr>
            <th scope="row">{{$session->id}}</th>
            <td>{{$session->start_date}}</td>
            <td>{{$session->end_date}}</td>
            <td>{{$session->nbr_max}}</td>
            <td>{{$session->formation->name}}</td>
            <td>{{$session->professor->name}}</td>
            <td>
              <div class="row">
          <a href="{{route('session.edit', $session->id)}}"class="btn btn-info btn-bordred wave-light"> <i class="fas fa-edit"></i>
          </a>

          <a href="{{route('session.show', $session->id)}}" class="btn btn-warning btn-bordred wave-light"><i class="fa fa-eye" aria-hidden="true"></i></a>

           <form method="POST" action="{{ route('session.destroy', $session->id) }}" style="float: left !important;display: contents;">
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



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Add New 
</button>

<!-- Add -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">New Session</h4>
      </div>
        <form action="{{ route('session.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
          @include('session.form')
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
