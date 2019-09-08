<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
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
        /*$categories = Category::where('name','description','image')->paginate(4);
        $categories = DB::table('categories')->paginate(5);
        return view('category.index',compact('categories'));
       */
        //$categories = DB::table('categories')->paginate(5);
        $categories = Category::all();
        return view('category.index',compact('categories'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }
    /*
    public function search(Request $request)
    {
        
        $search = $request->get('search');
        $categories = DB::table('categories')->where('name', 'like','%'.$search.'%')->paginate(4);
        return view('category.index', ['categories' => $categories]);
        
    }
    */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $category = new Category;
        $category->name =request('name');
        $category->description =request('description');

         if ($request->hasFile('image')){
        $imagepath=$request->image->store('uploads','public');
        $imageDATA=explode('/', $imagepath);
        $image_name=$imageDATA[1];
        $category->image=$image_name;
        }

        $category->save();

        return back();
        //dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        
        $category = Category::find($category->id);
        return view('category.edit',compact('category'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,Category $category)
    {  
       //dd($request->all());

       $category->name =request('name');
       $category->description =request('description');

           if ($request->hasFile('image')){

        $imagepath=$request->image->store('uploads','public');
        $imageDATA=explode('/', $imagepath);
        $image_name=$imageDATA[1];
        $category->image=$image_name; 

        }

        $category->save();
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        
        $category->delete();
        return redirect()->route('category.index');
        
    }
}
