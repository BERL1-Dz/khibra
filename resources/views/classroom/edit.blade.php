@extends('layouts.master')
@section('content')
    <div class="container-fluid mt--7">
        <div class="col order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Edit Classroom</h3>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('classroom.update',$classroom->id) }}">
                        {{method_field('PATCH')}}
                        @csrf
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Name</label>
                                        <input type="text" name="name" class="form-control form-control-alternative" value="{{$classroom->name}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Capacity</label>
                                        <input type="number" name="capacity"  class="form-control form-control-alternative" value="{{$classroom->capacity}}">
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4" />
                            <div class="pl-lg-1">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea rows="4" class="form-control form-control-alternative" name="description">{{$classroom->description}}</textarea>
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
