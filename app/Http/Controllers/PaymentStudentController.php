<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades;
use App\Payment;
use App\Student;
use App\Formation;
use App\Professor;
use App\Payment_Student;
use Illuminate\Http\Request;

class PaymentStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
       return view('payment.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $student_p = new Payment_Student;
        $student_p->date =request('date');
        $student_p->amount =request('amount');
        $student_p->formation_id =request('formation_id');
        $student_p->student_id =request('student_id');

        $student_p->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment_Student  $payment_Student
     * @return \Illuminate\Http\Response
     */
    public function show(Payment_Student $payment_Student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment_Student  $payment_Student
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment_Student $payment_Student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment_Student  $payment_Student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment_Student $payment_Student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment_Student  $payment_Student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment_Student $payment_Student)
    {
        //
    }
}
