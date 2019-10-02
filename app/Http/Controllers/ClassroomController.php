<?php

namespace App\Http\Controllers;
use App\Classroom;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classrooms = DB::table('classrooms')->paginate(4);
        return view('classroom.index',compact('classrooms'));
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
    $search_calss = $request->get('search_calss');
    if($search_calss){
    $classrooms = DB::table('classrooms')->where('name', 
    'like','%'.$search_calss.'%')->paginate(4);
    } else { 
    $classrooms = Classroom::all(); 
    }
     return view('classroom.index', ['classrooms' => 
     $classrooms]); 


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
        $classroom = new Classroom;
        $classroom->name = request('name');
        $classroom->capacity = request('capacity');
        $classroom->description = request('description');

            $classroom->save();
            return back(); 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        $classroom = Classroom::find($classroom->id);
        return view('classroom.show',compact('classroom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $classroom)
    {
        $classroom = Classroom::find($classroom->id);
        return view('classroom.edit',compact('classroom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classroom $classroom)
    {
        $classroom->name = request('name');
        $classroom->capacity = request('capacity');
        $classroom->description = request('description');

        $classroom->save();
        return redirect()->route('classroom.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        $classroom->delete();
        return redirect()->route('classroom.index');
    }
}
