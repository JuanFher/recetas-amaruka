<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();

        $rol = $user->roles->implode('name', ',');

        switch ($rol) {
            case 'super_admin':
                    $doctors = Doctor::count();
                    $patients = Patient::count();
                    return view('home', compact('doctors', 'patients'));
                break;

            case 'doctor':
                # code...
                break;

            case 'admin':
                # code...
                break;
        }

        
    }
}
