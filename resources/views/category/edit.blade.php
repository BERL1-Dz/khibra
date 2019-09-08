@extends('layouts.master')
@section('content')

<div class="container-fluid">
	<div class="card mb-3">
		<div class="card-header">

            <h3><i class="fas fa-folder"></i> Edit Category</h3>
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