@extends('layouts.master')

@section('content-')
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="box">
                    <div class="box-header d-flex">
                        <h3 class="pt-2 mb-0 float-left">All Categories</h3>
                        <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#myModal">+</button>
                    </div>
         <div class="col-md-4 search float-right">
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
            <th scope="col">Description</th>
            <!--<th scope="col">Image</th>-->
            <th scope="col">Action </th>
          </tr>
        </thead>
        <tbody>
          @foreach($categories as $category)
          <tr>
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->name}}</td>
            <td>{{$category->description}}</td>
            <!--<td><img src="{{asset('storage/uploads/'.$category->image)}}" width="80px" height="80px"></td>-->
            <td>
              <div class="row">
          <a href="{{route('category.edit', $category->id)}}"class="btn btn-info btn-bordred wave-light"> <i class="fas fa-edit"></i>
          </a>

          <a href="{{route('category.show', $category->id)}}"  class="btn btn-warning btn-bordred wave-light" data-toggle="modal" data-target="#show"><i class="fa fa-eye" aria-hidden="true"></i></a>

           <form method="POST" action="{{ route('category.destroy', $category->id) }}" style="float: left !important;display: contents;">
            @csrf
           {{ method_field('DELETE') }}
           <button type="submit" id="sa-remove" onclick="return confirm('Are you sure?')" class="wave-effect btn btn-danger btn-bordred wave-light"><i class="fa fa-times"></i></button>
          </form>

           <!-- <a href="{{route('category.destroy', $category->id)}}">
              <button id="sa-remove" class="wave-effect btn btn-danger btn-bordred wave-light"><i class="fa fa-times"></i></button>

            </a>
            -->
            </div>
          </td>
          </tr>
          @endforeach
        </table>

    </div>
  </div>
            </div>
        </div>
    </div>
</div>

<!--Display Data -->

<!--<div class="links">{{$categories->links()}}</div>-->

<br/>

<!-- Button trigger modal -->

<!-- Add -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">New Category</h4>
      </div>
        <form action="{{ route('category.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
          @include('category.form')
          </div>
           <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>

        </form>


    </div>
  </div>
</div>

<!--Show-->

<div id="show" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>


@endsection
<!-------------------------------------------BERLIN PART------------------------------------->

@section('content')
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
                            <form class="navbar-search navbar-search-light form-inline mb-2 d-none d-md-flex ml-lg-auto float-right pl-3">
                                <div class="form-group mb-0">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-search"></i></span>
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
                        <nav aria-label="...">
                            <ul class="pagination justify-content-end mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">
                                        <i class="fas fa-angle-left"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-angle-right"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
@endsection

