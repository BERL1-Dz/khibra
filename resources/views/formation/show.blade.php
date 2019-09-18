<div class="">
	<div class="modal-header">
	
	</div>
		<div class="modal-body">
			<div class="form-group">
			<strong class="col-md-">Name:</strong>
			{{$formation->name}}
			</div>
			<br/>
			<div class="form-group">
			<strong class="col-md-">Price:</strong>
			{{$formation->price}}Da
			</div>
			<br/>
			<div class="form-group">
				<strong class="col-md">Category:</strong>
				{{$formation->category->name}}
			</div>
			<br/>
			<div class="form-group">
				<img src="{{asset('storage/uploads/'.$formation->image)}}" width="200px" height="150px">
			</div>
		</div>
	<div class="modal-footer">
				
	</div>
</div>