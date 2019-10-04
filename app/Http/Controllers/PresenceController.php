<?php

namespace App\Http\Controllers;
use App\Student;
use App\Seance;
use App\Presence;
use Illuminate\Http\Request;

class PresenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seances = Seance::all();
        $students = Student::all();
        $presences = Presence::with('student','seance')->paginate(4);
        return view('presence.index', compact('presences','students','seances'));
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

    $search_presence = $request->get('search_presence');
    if($search_presence){
    $seances = Seance::all();
    $students = Student::all();
    $presences = Presence::with('student','seance')->where('presence', 
    'like','%'.$search_presence.'%')->paginate(4);
    } else {

    $seances = Seance::all();
    $students = Student::all();    
    $presences = Presence::all(); 

    }
     return view('presence.index',['presences' => 
     $presences,'seances' =>$seances,'students' =>$students]); 
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
        $presence = new Presence;
        $presence->seance_id = request('seance_id');
        $presence->student_id = request('student_id');
        $presence->presence = request('presence');

        $presence->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Presence  $presence
     * @return \Illuminate\Http\Response
     */
    public function show(Presence $presence)
    {
        $presence = Presence::find($presence->id);
        return view('presence.show',compact('presence'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Presence  $presence
     * @return \Illuminate\Http\Response
     */
    public function edit(Presence $presence)
    {
        echo "string";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Presence  $presence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Presence $presence)
    {
        return "view";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Presence  $presence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presence $presence)
    {
        $presence->delete();
        return redirect()->route('presence.index');
    }
}
