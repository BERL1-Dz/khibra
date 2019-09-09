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
            <th scope="row">{{$sessions->id}}</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <div class="row">
          <a href="{{route('session.edit', $session->id)}}"class="btn btn-info btn-bordred wave-light"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
          </a>

          <a href="#" class="btn btn-warning btn-bordred wave-light" data-toggle="modal" data-target="#show"><i class="fa fa-eye" aria-hidden="true"></i></a>

           <form method="POST" action="{{ route('session.destroy', $session->id) }}">
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
@endsection