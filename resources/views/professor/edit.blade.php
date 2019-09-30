@extends('layouts.master')

@section('content')
    <div class="container-fluid mt--7">
        <div class="col order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Edit Professor</h3>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('professor.update',$professor->id) }}">
                        {{method_field('PATCH')}}
                        @csrf
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Name</label>
                                        <input type="text" name="name" id="input-username" class="form-control form-control-alternative" value="{{$professor->name}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Phone</label>
                                        <input type="text" name="phone" id="input-username" class="form-control form-control-alternative" value="{{$professor->phone_number}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Email</label>
                                        <input name="email" value="{{$professor->email}}" class="form-control form-control-alternative">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Adresse</label>
                                        <input class="form-control form-control-alternative" name="address" value="{{$professor->address}}">
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4" />
                            <!-- Description -->
                            <div class="pl-lg-1">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea rows="4" class="form-control form-control-alternative" name="description">{{$professor->description}}</textarea>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="form-group" class="d-flex flex-colmun">
                                    Add Image:
                                    <input type="file" class="btn btn-sm btn-primary" name="image">
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
