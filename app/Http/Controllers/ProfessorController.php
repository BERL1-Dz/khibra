<?php

namespace App\Http\Controllers;

use App\Professor;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return "ah shit! here we go again!";
        
        $professors = DB::table('professors')->paginate(4);
        return view('professor.index',compact('professors'));
        
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
	    $search = $request->get('search');
	    if($search){
	    $professors = DB::table('professors')->where('name', 
	    'like','%'.$search.'%')->paginate(4);
	    } else { 
	    $professors = Professor::all(); 
	    }
	     return view('professor.index', ['professors' => 
	     $professors]); 

	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $professor = new Professor;
        $professor->name =request('name');
        $professor->phone_number =request('phone');
        $professor->email =request('email');
        $professor->address =request('address');
        $professor->description =request('description');
        

        $professor->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function show(Professor $professor)
    {
        $professors = Professor::find($professor->id);
        return view('professor.show',compact('professors'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function edit(Professor $professor)
    {
        $professor = Professor::find($professor->id);
        return view('professor.edit',compact('professor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professor $professor)
    {
        

        $professor->name =request('name');
        $professor->phone_number =request('phone');
        $professor->email =request('email');
        $professor->address =request('address');
        $professor->description =request('description');

        $professor->save();
        return redirect()->route('professor.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professor $professor)
    {
        $professor->delete();
        return redirect()->route('professor.index');
    }
}
