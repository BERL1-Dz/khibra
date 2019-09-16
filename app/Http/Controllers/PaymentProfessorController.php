<?php

namespace App\Http\Controllers;
use App\Student;
use App\Professor;
use App\Formation;
use App\Payment;
use App\Payment_Professor;
use Illuminate\Http\Request;

class PaymentProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professors new Professor::all();
       return view('payment.index' compact('professors'));
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
        $prof_p = new Payment_Professor;
        $prof_p->date =request('date');
        $prof_p->amount =request('amount');
        $prof_p->formation_id =request('formation_id');
        $prof_p->professor_id =request('professor_id');

        $prof_p->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment_Professor  $payment_Professor
     * @return \Illuminate\Http\Response
     */
    public function show(Payment_Professor $payment_Professor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment_Professor  $payment_Professor
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment_Professor $payment_Professor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment_Professor  $payment_Professor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment_Professor $payment_Professor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment_Professor  $payment_Professor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment_Professor $payment_Professor)
    {
        //
    }
}
