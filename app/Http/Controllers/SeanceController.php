<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades;
use App\Session;
use App\Classroom;
use App\Seance;
use Illuminate\Http\Request;

class SeanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $sessions = Session::all();
        $classrooms = Classroom::all();
        $seances = Seance::with('classroom','session')->paginate(3);
        return view('seance.index',compact('seances','sessions','classrooms'));
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

     
    public function search(Request $request)

    {   

    $search_seance = $request->get('search_seance');
    if($search_seance){
    $classrooms = Classroom::all();
    $sessions = Session::all();
    $seances = Seance::with('classroom','session')->where('name', 
    'like','%'.$search_seance.'%')->paginate(4);
    } else { 
    $seances = Seance::all();
    $classrooms = Classroom::all();
    $sessions = Session::all(); 
    }
     return view('seance.index', ['seances' => 
     $seances,'classrooms'=> $classrooms,'sessions'=>$sessions]); 


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

        $seances =  new Seance;
        $seances->name= request('name');
        $seances->session_id= request('session_id');
        $seances->classroom_id= request('classroom_id');
        $seances->date= request('date');
        $seances->duration =request('duration');

        $seances->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function show(Seance $seance)
    {
        $seance = Seance::find($seance->id);
        return view('seance.show',compact('seance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function edit(Seance $seance)
    {
        $classrooms = Classroom::all();
        $sessions = Session::all();
        $seance = Seance::find($seance->id);
        return view('seance.edit', compact('seance','sessions','classrooms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seance $seance)
    {
        $seance->name= request('name');
        $seance->session_id= request('session_id');
        $seance->classroom_id= request('classroom_id');
        $seance->date= request('date');
        $seance->duration =request('duration');

        $seance->save();
        return redirect()->route('seance.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seance $seance)
    {
        
    }
}
