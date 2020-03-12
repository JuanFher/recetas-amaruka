<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Patient;
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
        $doctors = Doctor::count();
        $patients = Patient::count();
        // dd($doctors);
        return view('home', compact('doctors', 'patients'));
    }
}
