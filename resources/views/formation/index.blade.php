@extends('layouts.master')

    @section('content')
        <div class="container-fluid mt--7">
            <!-- Table -->
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <h3 class="pt-2 mb-0 float-left">All Formations</h3>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary float-left ml-3" data-toggle="modal" data-target="#exampleModal">+
                            </button>
                            <div class="float-right">
                            <form action="/search_formation" method="GET" class="float-right pl-3">

                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" style="background-color: #5e72e4;border-color: #5e72e4;"><button type="submit" class="fas fa-search" style="color: rgba(255, 255, 255, 1);background: #fff0;border-color: #fff0;cursor: pointer;"></button></span>
                                    </div>
                                    <input class="form-control p-2" type="search" placeholder="Search" name="search_formation" style="border: 1px solid #e8e8e8;">
                                </div>
                            </form>             
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add New Formation</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('formation.store')}}" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    @include('formation.form')
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
                                    <th scope="col">Price</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Duration</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($formations as $formation)
                                    <tr>
                                        <th scope="row">

                                            <div class="media-body">
                                                <span class="mb-0 text-sm">{{$formation->id}}</span>
                                            </div>

                                        </th>
                                        <td>{{$formation->name}}</td>
                                        <td>{{$formation->price}} DA</td>
                                        <td>{{$formation->category->name}}</td>
                                        <td>{{$formation->durations}} Months</td>

                                        <td class="align-items-center">
                                            <a href="{{route('formation.edit', $formation->id)}}"class="btn btn-info btn-sm btn-bordred wave-light"> <i class="fas fa-edit"></i></a>
                                            </a>

                                            <a href="{{route('formation.show',$formation->id)}}" class="btn btn-warning btn-sm btn-bordred wave-light"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                            <form method="POST" action="{{ route('formation.destroy', $formation->id) }}" style="float: left !important;display: contents;">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button type="submit" id="sa-remove" onclick="return confirm('Are you sure?')" class="wave-effect btn-sm btn btn-danger btn-bordred wave-light"><i class="fa fa-times"></i></button>
                                            </form>
                                            @endforeach
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer py-4">
                            <div class="links">{{$formations->links()}}</div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
