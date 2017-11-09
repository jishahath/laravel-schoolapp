<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Student;
use App\Event;
use App\Duty;
use App\Studentlist;


class StudentlistController extends Controller
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
    public function studentlist(Request $request)
    {
       
        return redirect()->route('home')
    }
}