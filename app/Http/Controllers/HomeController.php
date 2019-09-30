<?php

namespace App\Http\Controllers;
use App\Professor;
use App\Student;
use App\Formation;
use App\Classroom;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $classrooms = Classroom::all();
        $professors = Professor::all();
        $students = Student::all();
        $formations = Formation::all();
        return view('home' , compact('formations','students','professors','classrooms'));
    }
}
