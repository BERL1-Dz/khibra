@extends('layouts.master')
@section('content')
<div class="">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">All Proessors</h3>
      <div class="col-md-4">
<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal">
  Add New 
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
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($professors as $professor)
    <tr>
      <th scope="row">{{$professor->id}}</th>
      <td>{{$professor->name}}</td>
      <td>{{$professor->phone_number}}</td>
      <td>{{$professor->email}}</td>
      <td>{{$professor->description}}</td>
      <td>
    <div class="row">
          <a href="{{route('professor.edit', $professor->id)}}"class="btn btn-info btn-bordred wave-light"> <i class="fas fa-edit"></i></a>

          <a href="{{route('professor.show', $professor->id)}}" class="btn btn-warning btn-bordred wave-light"><i class="fa fa-eye" aria-hidden="true"></i></a>

          <form method="POST" action="{{ route('professor.destroy', $professor->id) }}" style="float: left !important;display: contents;">
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
<br/>
<div class="links">{{$professors->links()}}</div>
<br/>
<!-- Add -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">New Professor</h4>
      </div>
        <form action="{{ route('professor.store')}}" method="post" enctype="multipart/form-data">
        	@csrf
          <div class="modal-body">
            @include('professor.form')
        	</div>
           <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
        </form>
    </div>
  </div>
</div>
</div>

@endsection


<!-------------------------------------------BERLIN PART------------------------------------->

@section('content-')
    <div class="container-fluid mt--7">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="pt-2 mb-0 float-left">All Categories</h3>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary float-left ml-3" data-toggle="modal" data-target="#exampleModal">+
                        </button>
                        <div class="float-right">
                            <form action="/search" method="GET" class="navbar-search navbar-search-light form-inline mb-2 d-none d-md-flex ml-lg-auto float-right pl-3">
                                <div class="form-group mb-0">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><button type="submit" class="fas fa-search" style="color: rgba(0, 0, 0, 0.6);background: #fff0;border-color: #fff0;cursor: pointer;"></button></span>
                                        </div>
                                        <input class="form-control" placeholder="Search" type="text">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('category.store')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="modal-body">
                                            <div class="form-group">
                                                @include('category.form')
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Options</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <th scope="row">

                                        <div class="media-body">
                                            <span class="mb-0 text-sm">{{$category->id}}</span>
                                        </div>

                                    </th>
                                    <td>
                                        {{$category->name}}
                                    </td>
                                    <td>
                                        {{$category->description}}
                                    </td>

                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a href="{{route('category.edit', $category->id)}}">
                                                    <button class="dropdown-item" ><i class="ni ni-settings-gear-65 text-yellow"></i> Edit</button></a>
                                                <form method="POST" action="{{ route('category.destroy', $category->id) }}" style="float: left !important;display: contents;">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" id="sa-remove" onclick="return confirm('Are you sure?')"  class="dropdown-item"><i class="ni ni-scissors text-red"></i>Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <div class="links">{{$categories->links()}}</div>
                    </div>
                </div>
            </div>
        </div>
@endsection
