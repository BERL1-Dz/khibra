@extends('layouts.master')

@section('content-')
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="box">
                    <div class="box-header d-flex">
                        <h3 class="pt-2 mb-0 float-left">Alls Categories</h3>
                        <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#myModal">+</button>
                    </div>

        <div class="col-md-4 search float-right">
     
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
                            <form action="/search" method="GET" class="float-right pl-3">

                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="background-color: #5e72e4;border-color: #5e72e4;"><button type="submit" class="fas fa-search" style="color: rgba(255, 255, 255, 1);background: #fff0;border-color: #fff0;cursor: pointer;"></button></span>
                                        </div>
                                        <input class="form-control p-2" type="search" placeholder="Search" name="search" style="border: 1px solid #e8e8e8;">
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
                                <th scope="col">Actions</th>
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

                                    <td class="align-items-center">
                                        <a href="{{route('category.edit', $category->id)}}"class="btn btn-info btn-sm btn-bordred wave-light"> <i class="fas fa-edit"></i>
                                        </a>

                                        <form method="POST" action="{{ route('category.destroy', $category->id) }}" style="float: left !important;display: contents;">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" id="sa-remove" onclick="return confirm('Are you sure?')" class="wave-effect btn btn-sm btn-danger btn-bordred wave-light"><i class="fa fa-times"></i></button>
                                        </form>
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

