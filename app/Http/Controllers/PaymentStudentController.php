<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades;
use App\Payment;
use App\Student;
use App\Formation;
use App\Professor;
use App\Payment_Professor;
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
    public function show($id)
    {
         $payment = Payment_Student::all();
        $formation = Formation::all();
        $student = Student::all();
        $payment_Student =Payment_Student::find($id);
        return view('payment.show',compact('payment_Student','payment','student','formation'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment_Student  $payment_Student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payment = Payment_Student::all();
        $formation = Formation::all();
        $student = Student::all();
        $payment_Student =Payment_Student::find($id);
        return view('payment.edit',compact('payment_Student','payment','student','formation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment_Student  $payment_Student
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        
        $payment_Student->date =request('date');
        $payment_Student->amount =request('amount');
        $payment_Student->formation_id =request('formation_id');
        $payment_Student->student_id =request('student_id');

        $payment_Student->save();
        return redirect()->route('payment.index');

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
         $payment_Student->delete();
         return redirect()->route('payment.index');
    }
}
