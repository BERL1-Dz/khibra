@extends('layouts.master')
@section('content')
    <div class="container-fluid mt--7">
        <div class="col order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Edit Student</h3>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('student.update',$student->id) }}">
                        {{method_field('PATCH')}}
                        @csrf
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Firstname</label>
                                        <input type="text" name="firstname" class="form-control form-control-alternative" value="{{$student->firstname}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Lastname</label>
                                        <input type="text" name="lastname"  class="form-control form-control-alternative" value="{{$student->lastname}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Gender</label>
                                        <select name="gender"  class="form-control">
                                            <option value="Choose"></option>
                                            <option @if($student->gender =="Male") selected @endif value="Male">Male</option>
                                            <option @if($student->gender =="Female") selected @endif value="Female">Female</option>
                                            <option @if($student->gender =="Other") selected @endif value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Birthday</label>
                                        <input class="form-control form-control-alternative" type="date" name="birthday" value="{{$student->birthday}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Grades</label>
                                        <select name="grade_levels" class="form-control">
                                            <option value="">Choose</option>
                                            <option @if($student->grade_levels =="Bachelor") selected @endif value="Bachelor">Bachelor</option>
                                            <option @if($student->grade_levels =="Master") selected @endif value="Master">Master</option>
                                            <option @if($student->grade_levels =="Doctorate") selected @endif value="Doctorate">Doctorate</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Phone</label>
                                        <input class="form-control form-control-alternative" type="tel" name="phone" value="{{$student->phone}}">
                                    </div>
                                </div>
                            </div><div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Status</label>
                                        <select name="status" class="form-control">
                                            <option value="0">Choose</option>
                                            <option @if($student->status =="Avaliable") selected @endif value="Avaliable">Avaliable</option>
                                            <option @if($student->status =="Unavaliable") selected @endif value="Unavaliable">Unavaliable</option>
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
    </div>

@endsection
