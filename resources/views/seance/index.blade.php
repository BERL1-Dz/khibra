@extends('layouts.master')
@section('content')
<div class="">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">All Classes</h3>
      <div class="col-md-4">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Add new 
</button></div>
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
            <th scope="col">Name</th>
            <th scope="col">Session</th>
            <th scope="col">Classroom</th>
            <th scope="col">Duration</th>
            <th scope="col">Date</th>
            <th scope="col">Action </th>
          </tr>
        </thead>
        <tbody>
          @foreach($seances as $seance)
          <tr>
            <th scope="row">{{$seance->id}}</th>
            <th>{{$seance->name}}</th>
            <td>{{$seance->session->name}}</td>
            <td>{{$seance->classroom->name}}</</td>
            <td>{{$seance->duration}}</td>
            <td>{{$seance->date}}</td>
            <td>
              <div class="row">
          <a href="{{route('seance.edit', $seance->id)}}"class="btn btn-info btn-bordred wave-light"> <i class="fas fa-edit"></i>
          </a>

          <a href="{{route('seance.show', $seance->id)}}"  class="btn btn-warning btn-bordred wave-light"><i class="fa fa-eye" aria-hidden="true"></i></a>

           <form method="POST" action="{{ route('seance.destroy', $seance->id) }}" style="float: left !important;display: contents;">
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

<div class="links">{{$seances->links()}}</div>

<!-- Add -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">New Class</h4>
      </div>
        <form action="{{ route('seance.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
          @include('seance.form')
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