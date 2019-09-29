@extends('layouts.master')
@section('content-')
<div class="container-fluid">
	<div class="card mb-3">
		<div class="card-header">
			<h3><i class="fas fa-fw fa-book"></i> Edit Formation</h3>
		</div>
		<div class="card-body">
	<form method="POST" enctype="multipart/form-data" action="{{ route('formation.update',$formation->id) }}" class="form-horizontal">
        {{method_field('PATCH')}}
         @csrf

        Category:
        <select name="category_id"  class="form-control">
                @foreach($categories as $category)
           			<option selected="{{$category->name}}" value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
        </select>
        <br/>
        Name:
        <input type="text" name="name" value="{{$formation->name}}" class="form-control" placeholder="" />
        <br/>
        Price:
        <input value="{{$formation->price}}" type="number" min="0.01" step="0.01" max="5000" name="price" id="price" class="form-control">
        <br/>
        Durations:
        <input type="number" name="durations" value="{{$formation->durations}}" class="form-control" id="durations"> 
        <br/>

        <div class="input-group">
                        <div class="form-group" class="d-flex" class="flex-colmun">
                          <label for="image">Add Image</label>
                           <input type="file" name="image">
                          </div>
        </div>
        <br/>
        <div class="card-footer">
         <button type="submit" class="btn btn-primary">Save Changes</button>
         </div>
		</div>
	</div>
</div>
@endsection

@section('content')
    <div class="container-fluid mt--7">
        <div class="col order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Edit Formation</h3>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('formation.update',$formation->id) }}">
                        {{method_field('PATCH')}}
                        @csrf
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Category</label>
                                        <select name="category_id"  class="form-control form-control-alternative">
                                            @foreach($categories as $category)
                                                <option selected="{{$category->name}}" value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Name</label>
                                        <input type="text" name="name" id="input-username" class="form-control form-control-alternative" value="{{$formation->name}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Duration</label>
                                        <input type="number" name="durations" value="{{$formation->durations}}" class="form-control form-control-alternative" id="durations">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Price</label>
                                        <input class="form-control form-control-alternative" type="number" min="0.01" step="0.01" max="5000" name="price" value="{{$formation->price}}">
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4" />
                            <!-- Description -->
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
