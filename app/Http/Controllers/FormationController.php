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
        //$formations = Formation::all();
        $formations = Formation::with('category')->paginate('4');
        $categories = Category::all();
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

 public function search(Request $request)
{ 
   //dd($request->all());
     $search_formation = $request->get('search_formation');
    if($search_formation){
    $categories = Category::all();
    $formations = Formation::with('category')->where('name', 
    'like','%'.$search_formation.'%')->paginate(4);
    } else { 
    $formations = Formation::all();
    $categories = Category::all(); 
    }
     return view('formation.index', ['formations' => 
     $formations,'categories' => $categories]); 
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
        $categories= Category::all();
        $formation = Formation::find($formation->id);
        return view('formation.show',compact('formation','categories'));
        
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
       $formation->delete();
        return redirect()->route('formation.index');
    }
}
