<?php
namespace App\Http\Controllers;
use App\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = DB::table('students')->paginate(4);
        return view('student.index',compact('students'));
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

    $search_student = $request->get('search_student');
    if($search_student){
    $students = DB::table('students')->where('lastname', 
    'like','%'.$search_student.'%')->paginate(4);
    } else { 
    $students = Student::all(); 
    }
     return view('student.index', ['students' => 
     $students]); 

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
        $student = new Student;
        $student->firstname =request('firstname');
        $student->lastname =request('lastname');
        $student->gender =request('gender');
        $student->birthday =request('birthday');
        $student->phone =request('phone');
        $student->grade_levels =request('grade_levels');
        $student->status =request('status');

        $student->save();
        return back();
    }
        
        

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
       $student =  Student::find($student->id);
       return view('student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        
        $student = Student::find($student->id);
        return view('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {


        $student->firstname =request('firstname');
        $student->lastname =request('lastname');
        $student->gender =request('gender');
        $student->birthday =request('birthday');
        $student->phone =request('phone');
        $student->grade_levels =request('grade_levels');
        $student->status =request('status');

        $student->save();
        return redirect()->route('student.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index');
    }
}
