@extends('layouts.master')
@section('content')
<div class="">
	<div class="box">
    <div class="box-header">
      <h3 class="box-title"><i class="fas fa-fw fa-coins"></i> Payments</h3>
      <a href="#" class="btn  btn-sm btn-primary" data-toggle="modal" data-target="#Student"> <i class="fas fa-fw fa-user-graduate"></i>Student Payment</a>
      <a href="#" id="btn" class="btn  btn-sm btn-warning" data-toggle="modal" data-target="#Prof"> <i class="fas fa-fw fa-chalkboard-teacher"></i> Professor Payment</a>
      
    </div>
    <br/>
    <div class="col-md-4 search">
      <form action="/search" method="GET">
        <div class="input-group">
          <input type="search" name="search" class="form-control">
          <span class="input-group-prepend">
            <button type="submit" class="btn btn-primary bouton">Search</button>
          </span>
        </div>
      </form>
    </div>
    <div class="box-body">
      
            <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Date</th>
            <th scope="col">Formation</th>
            <th scope="col">Professor</th>
            <th scope="col">Amount</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          
          <tr>
            @foreach($payments as $payment)
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <div class="row">
          <a href="{{route('payment.edit', $payment->id)}}"class="btn btn-info btn-bordred wave-light"> <i class="fas fa-edit"></i>
          </a>

          <a href="{{route('payment.show', $payment->id)}}"  class="btn btn-warning btn-bordred wave-light" data-toggle="modal" data-target="#show"><i class="fa fa-eye" aria-hidden="true"></i></a>

           <form method="POST" action="{{ route('payment.destroy', $payment->id) }}" style="float: left !important;display: contents;">
            @csrf 
           {{ method_field('DELETE') }}
           <button type="submit" id="sa-remove" onclick="return confirm('Are you sure?')" class="wave-effect btn btn-danger btn-bordred wave-light"><i class="fa fa-times"></i></button>
          </form>
            
            </div>
          </td>
          </tr>
          @endforeach  
        </table>

    </div>
  </div>

</div>

<!-- Prof -->
<div class="modal fade" id="Prof" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Payment</h4>
      </div>
        <form action="{{ route('paymentprof.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
          @include('payment.prof')
          <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
        </div>
          </div>

        </form>
    </div>
  </div>
</div>


<!-- Student -->
<div class="modal fade" id="Student" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Payment</h4>
      </div>
        <form action="{{ route('paymentstudent.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
          @include('payment.student')

          <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
        </div>
          </div>

        </form>
    </div>
  </div>
</div>
@endsection