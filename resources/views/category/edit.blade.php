@extends('layouts.master')
@section('content-')

<div class="container-fluid">
	<div class="card mb-3">
		<div class="card-header">

            <h3><i class="fas fa-fw fa-folder"></i> Edit Category</h3>
		</div>
		<div class="card-body">
			<form method="POST" enctype="multipart/form-data" action="{{ route('category.update',$category->id) }}" class="form-horizontal">
        {{method_field('PATCH')}}
         @csrf
      Name:
   		<input type="text" name="name"  class="form-control" value="{{$category->name}}"/>
   		<br/>
   		Description:
            <textarea name="description"  cols="15" rows="8" class="form-control">{{$category->description}}</textarea>
            <br/>
            <br/>
             <div class="input-group">
                  <div class="form-group" class="d-flex" class="flex-colmun">
                   Add Image:
                   <input type="file" name="image">
                   </div>
             </div>
             <br/>
             <div class="card-footer">
             <button type="submit" class="btn btn-primary">Save Changes</button>
             </div>
      </form> 
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
                            <h3 class="mb-0">Edit Category</h3>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('category.update',$category->id) }}">
                        {{method_field('PATCH')}}
                        @csrf
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Name</label>
                                        <input type="text" name="name" id="input-username" class="form-control form-control-alternative" value="{{$category->name}}">
                                    </div>
                                </div>
                            </div>
                        <hr class="my-4" />
                        <!-- Description -->
                        <div class="pl-lg-1">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea rows="4" class="form-control form-control-alternative" name="description">{{$category->description}}</textarea>
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
