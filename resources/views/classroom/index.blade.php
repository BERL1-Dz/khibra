@extends('layouts.master')
@section('content-')
<div class="">

  <div class="box">
    <div class="box-header">
      <h3 class="box-title">All Classrooms</h3>
      <div class="col-md-4">
        <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal">
        Add New 
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

            <a href="{{route('classroom.edit', $classroom->id)}}"class="btn btn-info btn-bordred wave-light"> <i class="fas fa-edit"></i></a>

                
           <a href="{{route('classroom.show', $classroom->id)}}" class="btn btn-warning btn-bordred wave-light"><i class="fa fa-eye" aria-hidden="true"></i></a>

          <form method="POST" action="{{route('classroom.destroy', $classroom->id)}}" style="float: left !important;display: contents;">
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



	<div class="links">{{$classrooms->links()}}</div>
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
                        <h3 class="pt-2 mb-0 float-left">All Classrooms</h3>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary float-left ml-3" data-toggle="modal" data-target=".bd-example-modal-lg">+
                        </button>
                        <div class="float-right">
                            <form action="/search_calss" method="GET">
                                <div class="input-group">
                                    <input type="search" name="search_calss" class="form-control">
                                    <span class="input-group-prepend">
                          <button type="submit" class="btn btn-primary bouton">Search</button>
                             </span>
                                </div>
                            </form>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add New Classroom</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('classroom.store')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="modal-body">
                                            <div class="form-group">
                                                @include('classroom.form')
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
                                <th scope="col">Capacity</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($classrooms as $classroom)
                                <tr>
                                    <th scope="row">

                                        <div class="media-body">
                                            <span class="mb-0 text-sm">{{$classroom->id}}</span>
                                        </div>

                                    </th>
                                    <td>{{$classroom->name}}</td>
                                    <td>{{$classroom->capacity}}</td>
                                    <td>{{$classroom->description}}</td>


                                    <td class="align-items-center">
                                        <a href="{{route('classroom.edit', $classroom->id)}}"class="btn btn-sm btn-light btn-bordred wave-light"> <i class="fas fa-edit"></i></a>

                                        <a href="{{route('classroom.show', $classroom->id)}}" class="btn btn-sm btn-light btn-bordred wave-light"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                        <form method="POST" action="{{ route('classroom.destroy', $classroom->id) }}" style="float: left !important;display: contents;">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" id="sa-remove" onclick="return confirm('Are you sure?')" class="wave-effect btn-sm btn btn-light btn-bordred wave-light"><i class="fa fa-times"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <div class="links">{{$classrooms->links()}}</div>
                    </div>
                </div>
            </div>
        </div>
@endsection
