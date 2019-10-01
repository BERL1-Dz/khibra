
@extends('layouts.master')
@section('content-')
<!--Professor Table-->
<div class="">
	<div class="box">
    	<div class="box-header">
      <h3 class="box-title"><i class="fas fa-fw fa-coins"></i> Payments</h3>
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
      <br/>
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
        </tbody>
           @foreach($salaries as $salary)
          <tr>
            <th scope="row">{{$salary->id}}</th>
            <td>{{$salary->date}}</td>
            <td>@if(!empty($salary->formation))
              {{$salary->formation->name}}
                  @endif
            </td>
            <td>@if(!empty($salary->professor))
              {{$salary->professor->name}}
              @endif
            </td>
            <td>{{$salary->amount}}</td>
              <td>
              <div class="row">
          <a href="{{route('paymentprof.edit',$salary->id)}}"class="btn btn-info btn-bordred wave-light"> <i class="fas fa-edit"></i>
          </a>

          <a href="{{route('paymentprof.show',$salary->id)}}" class="btn btn-warning btn-bordred wave-light"><i class="fa fa-eye" aria-hidden="true"></i></a>

           <form method="POST" action="{{route('paymentprof.destroy',$salary->id)}}" style="float: left !important;display: contents;">
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
<div class="links">{{$salaries->links()}}</div>
</div>
<br/>


<!--Student table -->
<div class="">
	<div class="box">
    	<div class="box-header">
      <h3 class="box-title"><i class="fas fa-fw fa-coins"></i> Payments</h3>
      <a href="#" class="btn  btn-sm btn-primary" data-toggle="modal" data-target="#Student"> <i class="fas fa-fw fa-user-graduate"></i>Student Payment</a>
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
      <br/>
    	<div class="box-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Date</th>
            <th scope="col">Formation</th>
            <th scope="col">Student</th>
            <th scope="col">Amount</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        </tbody>

           @foreach($payments as $payment)
          <tr>
            <th scope="row">{{$payment->id}}</th>
            <td>{{$payment->date}}</td>
            <td>@if(!empty($payment->formation))
              {{$payment->formation->name}}
                  @endif</td>
            <td>@if(!empty($payment->student))
              {{$payment->student->lastname}}
                  @endif</td>
            <td>{{$payment->amount}}</td>
              <td>
              <div class="row">
          <a href="{{route('paymentstudent.edit',$payment->id)}}"class="btn btn-info btn-bordred wave-light"> <i class="fas fa-edit"></i>
          </a>

          <a href="{{route('paymentstudent.show',$payment->id)}}" class="btn btn-warning btn-bordred wave-light"><i class="fa fa-eye" aria-hidden="true"></i></a>

           <form method="POST" action="{{route('paymentstudent.destroy',$payment->id)}}" style="float: left !important;display: contents;">
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
<div class="links">{{$payments->links()}}</div>
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



<!--------------------------------------BERLIN-------------------------------------------------->






<!--------------------------------------BERLIN-------------------------------------------------->
@section('content')
    <div class="container-fluid mt--7">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <!-- Button trigger modal -->
                        <a href="#" id="btn" class="btn  btn-sm btn-warning float-left ml-3 mt-1" data-toggle="modal" data-target="#Prof"> <i class="fas fa-fw fa-chalkboard-teacher"></i> Professor Payment</a>
                        <div class="float-right">
                            <form action="/search" method="GET">
                                <div class="input-group">
                                    <input type="search" name="search" class="form-control">
                                    <span class="input-group-prepend">
                          <button type="submit" class="btn btn-primary bouton">Search</button>
                             </span>
                                </div>
                            </form>
                        </div>
                        <!-- Modal -->
                        <!--<div class="modal fade bd-example-modal-lg" id="Prof" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Payment Professor</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('paymentprof.store')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="modal-body">
                                            <div class="form-group">
                                                @include('payment.prof')
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>-->
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Date</th>
                                <th scope="col">Formation</th>
                                <th scope="col">Professor</th>
                                <th scope="col">Amount</th>
                                <th scope="col"></th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($salaries as $salary)
                                <tr>
                                    <th scope="row">

                                        <div class="media-body">
                                            <span class="mb-0 text-sm">{{$salary->id}}</span>
                                        </div>

                                    </th>
                                    <td>{{$salary->date}}</td>
                                    <td>@if(!empty($salary->formation))
                                            {{$salary->formation->name}}
                                        @endif
                                    </td>
                                    <td>@if(!empty($salary->professor))
                                            {{$salary->professor->name}}
                                        @endif
                                    </td>
                                    <td>{{$salary->amount}}</td>
                                    <td>

                                    <td class="align-items-center">
                                        <a href="{{route('paymentprof.edit',$salary->id)}}" class="btn btn-sm btn-light btn-bordred wave-light"> <i class="fas fa-edit"></i>
                                        </a>

                                        <a href="{{route('paymentprof.show',$salary->id)}}" class="btn btn-sm btn-light btn-bordred wave-light"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                        <form method="POST" action="{{route('paymentprof.destroy',$salary->id)}}" style="float: left !important;display: contents;">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" id="sa-remove" onclick="return confirm('Are you sure?')" class="wave-effect btn-sm btn btn-light btn-bordred wave-light"><i class="fa fa-times"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <div class="links">{{$salaries->links()}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-6 mt--7">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <!-- Button trigger modal -->
                        <a href="#" class="btn  btn-sm btn-primary float-left ml-3 mt-1" data-toggle="modal" data-target="#Student"> <i class="fas fa-fw fa-user-graduate"></i>Student Payment</a>
                        <div class="float-right">
                            <form action="/search" method="GET">
                                <div class="input-group">
                                    <input type="search" name="search" class="form-control">
                                    <span class="input-group-prepend">
                          <button type="submit" class="btn btn-primary bouton">Search</button>
                             </span>
                                </div>
                            </form>
                        </div>
                        <!-- Modal-->
                        <div class="modal fade bd-example-modal-lg" ><div class="modal-dialog modal-lg" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Payment Student</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('paymentstudent.store')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="modal-body">
                                            <div class="form-group">
                                                @include('payment.student')
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                           </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Date</th>
                                <th scope="col">Formation</th>
                                <th scope="col">Student</th>
                                <th scope="col">Amount</th>
                                <th scope="col"></th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($payments as $payment)
                                <tr>
                                    <th scope="row">

                                        <div class="media-body">
                                            <span class="mb-0 text-sm">{{$payment->id}}</span>
                                        </div>

                                    </th>
                                    <td>{{$payment->date}}</td>
                                    <td>@if(!empty($payment->formation))
                                            {{$payment->formation->name}}
                                        @endif</td>
                                    <td>@if(!empty($payment->student))
                                            {{$payment->student->lastname}}
                                        @endif</td>
                                    <td>{{$payment->amount}}</td>
                                    <td>

                                    <td class="align-items-center">
                                        <a href="{{route('paymentstudent.edit',$payment->id)}}"class="btn btn-sm btn-light btn-bordred wave-light"> <i class="fas fa-edit"></i>
                                        </a>

                                        <a href="{{route('paymentstudent.show',$payment->id)}}" class="btn  btn-sm btn-light btn-bordred wave-light"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                        <form method="POST" action="{{route('paymentstudent.destroy',$payment->id)}}" style="float: left !important;display: contents;">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" id="sa-remove" onclick="return confirm('Are you sure?')" class="wave-effect btn-sm btn btn-light btn-bordred wave-light"><i class="fa fa-times"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <div class="links">{{$payments->links()}}</div>
                    </div>
                </div>
            </div>
        </div>


    <!-- Prof -->
    <div class="modal fade" id="Prof" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Payment</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
                    <h4 class="modal-title" id="myModalLabel">Payment</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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



