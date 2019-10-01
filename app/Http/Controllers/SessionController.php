<?php

namespace App\Http\Controllers;
use App\Professor;
use App\Formation;
use App\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formations = Formation::all();
        $professors = Professor::all();
        $sessions = Session::with('formation','professor')->paginate('4');
        return view('session.index', compact('sessions', 'formations','professors'));
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
        $session = new Session();
        $session->name =request('name');
        $session->start_date =request('start_date');
        $session->end_date =request('end_date');
        $session->formation_id =request('formation_id');
        $session->prof_id =request('prof_id');
        $session->nbr_max =request('nbr_max');
        $session->save();

        return back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function show(Session $session)
    {
        $session = Session::find($session->id);
        return view('session.show',compact('session'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function edit(Session $session)
    {

        $professors = Professor::all();
        $formations = Formation::all();
        $session = Session::find($session->id);
        return view('session.edit',compact('session','formations','professors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Session $session)
    {
        //dd($request->all());
        $session->name =request('name');
        $session->start_date =request('start_date');
        $session->end_date =request('end_date');
        $session->formation_id =request('formation_id');
        $session->prof_id =request('prof_id');
        $session->nbr_max =request('nbr_max');

        $session->save();
        return redirect()->route('session.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function destroy(Session $session)
    {
       
    }
}
