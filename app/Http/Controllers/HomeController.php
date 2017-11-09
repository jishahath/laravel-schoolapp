<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Studentlist;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show students screen.
     *
     * @return \Illuminate\Http\Response
     */
    public function showStudent()
    {
        return view('student');
    }

    /**
     * Show events screen.
     *
     * @return \Illuminate\Http\Response
     */
    public function showEvent()
    {
        return view('event');
    }

    /**
     * Show duty screen.
     *
     * @return \Illuminate\Http\Response
     */
    public function showDuty()
    {
        return view('duty');
    }

    /**
     * Show studentlist screen.
     *
     * @return \Illuminate\Http\Response
     */
    public function showStudentlist()
    {
        return view('studentlist');
    }
}
