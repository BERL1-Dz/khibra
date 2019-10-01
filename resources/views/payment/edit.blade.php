@extends('layouts.master')
@section('content')
    <div class="container-fluid mt--7">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Edit Student Payment</h3>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data" action="{{route('paymentstudent.update',$payment_Student->id)}}">
                    {{method_field('PATCH')}}
                    @csrf
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Date</label>
                                    <input class="form-control" type="date" name="date" value="{{$payment_Student->date}}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Amount</label>
                                    <input type="number" name="amount"  class="form-control form-control-alternative" value="{{$payment_Student->amount}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Formation</label>
                                    <select class="form-control" name="formation_id">
                                        @foreach($formation as $formation)
                                            <option value="{{$formation->id}}">{{$formation->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Student</label>
                                    <select class="form-control" name="student_id">
                                        @foreach($student as $student)
                                            <option value="{{$student->id}}">{{$student->lastname}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
