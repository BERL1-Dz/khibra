@extends('layouts.master')
<!-------------------------------------------BERLIN PART------------------------------------->

@section('content')
    <div class="container-fluid mt--7">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="pt-2 mb-0 float-left">All Sessions</h3>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary float-left ml-3" data-toggle="modal" data-target=".bd-example-modal-lg">+
                        </button>
                        <div class="float-right">
<form action="/search_session" method="GET" class="float-right pl-3">

<div class="input-group input-group-alternative">
<div class="input-group-prepend">
<span class="input-group-text" style="background-color: #5e72e4;border-color: #5e72e4;"><button type="submit" class="fas fa-search" style="color: rgba(255, 255, 255, 1);background: #fff0;border-color: #fff0;cursor: pointer;"></button></span>
</div>
<input class="form-control p-2" type="search" placeholder="Search" name="search_session" style="border: 1px solid #e8e8e8;">
</div>
</form> 
                        </div>
                        <!-- Modal -->
                        <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add New Session</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('session.store')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="modal-body">
                                            <div class="form-group">
                                                @include('session.form')
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
                                    <th scope="row">

                                        <div class="media-body">
                                            <span class="mb-0 text-sm">{{$session->id}}</span>
                                        </div>

                                    </th>
                                    <td>{{$session->name}}</td>
                                    <td>{{$session->start_date}}</td>
                                    <td>{{$session->end_date}}</td>
                                    <td>{{$session->nbr_max}}</td>
                                    <td>{{$session->formation->name}}</td>
                                    <td>{{$session->professor->name}}</td>

                                    <td class="align-items-center">
                                        <a href="{{route('session.edit', $session->id)}}" class="btn btn-sm btn-light btn-bordred wave-light"> <i class="fas fa-edit"></i></a>

                                        <a href="{{route('session.show', $session->id)}}" class="btn btn-sm btn-light btn-bordred wave-light"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                        <form method="POST" action="{{ route('session.destroy', $session->id) }}" style="float: left !important;display: contents;">
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
                        <div class="links">{{$sessions->links()}}</div>
                    </div>
                </div>
            </div>
        </div>
@endsection

