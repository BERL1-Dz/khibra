@extends('layouts.master')
@section('content')
 <div class="container-fluid mt--7">
 	<div class="card mb-3">
 		<div class="card-header">
			<h3><i class="fas fa-fw fa-coins"></i>View Payments</h3>
		</div>
		<br><br>
		<div class="card-body">
		
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
					<strong class="col-sm-2">Date:</strong>
					{{$payment_Student->date}}
					<br><br>
					<strong class="col-sm-2">Formation:</strong>
					{{$payment_Student->formation->name}}
					<br><br>
					<strong class="col-sm-2">Student:</strong>
					{{$payment_Student->student->lastname}}
					<br><br>
					<strong class="col-sm-2">Amount:</strong>
					{{$payment_Student->amount}}<b><i>DA</i></b>
				</div>
			</div>
			</div>
		</div>
 	</div>	
 </div>

 <div class="col-md-2 col-xs-2 col1 center-block ml-6">
          <a href="{{route('payment.index')}}"><button class="btn btn-success center-block"><i class="fas fa-sign-out-alt"></i> return to Payment lists</button></a>
        </div>
@endsection
