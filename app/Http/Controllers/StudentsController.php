<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Students;
use App\Event;
use App\Duty;
use App\Studentlist;


class StudentsController extends Controller
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
     * Add student.
     *
     * @return \Illuminate\Http\Response
     */
    public function students(Request $request)
    {
        $this->validateStudents($request);

        $students = new \App\Students;
        $students->students = $request->students;
        $students->user_id = Auth::user()->id;
        $students->save();
        
         return redirect()->route('home');
    }
}