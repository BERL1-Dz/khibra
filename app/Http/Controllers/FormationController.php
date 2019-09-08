<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Formation;
use App\Category;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $formations = Formation::all();
        $categories = Category::all();
        //$formations = DB::table('formations');
        return view('formation.index',compact('categories','formations'));
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
        $formation = new Formation;
        $formation->category_id =request('category_id');
        $formation->name =request('name');
        $formation->price =request('price');
        $formation->durations =request('durations');

           if ($request->hasFile('image')){
        $imagepath=$request->image->store('uploads','public');
        $imageDATA=explode('/', $imagepath);
        $image_name=$imageDATA[1];
        $formation->image=$image_name;
        }

        $formation->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function show(Formation $formation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function edit(Formation $formation)
    {
        $categories= Category::all();
        $formation = Formation::find($formation->id);
        return view('formation.edit',compact('formation','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formation $formation)
    {

        
        
        $formation->category_id =request('category_id');
        $formation->name =request('name');
        $formation->price =request('price');
        $formation->durations =request('durations');

           if ($request->hasFile('image')){
        $imagepath=$request->image->store('uploads','public');
        $imageDATA=explode('/', $imagepath);
        $image_name=$imageDATA[1];
        $formation->image=$image_name;
        }

        $formation->save();
        return redirect()->route('formation.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formation $formation)
    {
       echo "five!";
    }
}
