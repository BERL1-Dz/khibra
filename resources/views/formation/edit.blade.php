@extends('layouts.master')
@section('content')
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