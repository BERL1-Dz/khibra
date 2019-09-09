@extends('layouts.master')
@section('content')
<div class="container-fluid">
      <div class="card mb-3">
            <div class="card-header">

            <h3><i class="fas fa-fw fa-chalkboard-teacher"></i> Edit Professor</h3>
            </div>
            <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{ route('professor.update',$professor->id) }}" class="form-horizontal">
                  {{method_field('PATCH')}}
                  @csrf
            Name:
            <input type="text" name="name" value="{{$professor->name}}"  class="form-control" placeholder="" />
            <br/>
            Phone:
            <input type="tel" name="phone" value="{{$professor->phone_number}}"  class="form-control" placeholder="" />
            <br/>
            Email:
            <input type="text" name="email" value="{{$professor->email}}"  class="form-control" placeholder="" />
            <br/>
            Adress:
            <input type="text" name="address" value="{{$professor->address}}"  class="form-control" placeholder="" />
            <br/>
            Description:
            <textarea name="description"  cols="15" rows="8" class="form-control">{{$professor->description}}</textarea>
            </div>
            <br/>
            <div class="card-footer">
             <button type="submit" class="btn btn-primary">Save Changes</button>
             </div>
      </form>
      </div>
</div>  
@endsection