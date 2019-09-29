<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Student;
use App\Payment_Professor;
use App\Payment_Student;
use App\Formation;
use App\Professor;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $formations = Formation::all();
        $salaries = Payment_Professor::with('formation','Professor')->paginate(3);
        $payments = Payment_Student::with('Formation','Student')->paginate(3);
        $paymentprof = Payment_Professor::all();

            //merge two collections
        //$payments->merge('$payments_s');
        $students = Student::all();
        $professors = Professor::all();
        return view('payment.index', compact('salaries','students','formations','professors','payments','paymentprof'));
       
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        echo "charile";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
         $payment->delete();
        return redirect()->route('payment.index');
    }
}
