<?php

namespace VirtualHealth\Http\Controllers;

use Illuminate\Http\Request;
use VirtualHealth\Doctor;

class DoctorController extends Controller
{
    public function __construct()
    {
        $this->middleware('doctor')->except('all', 'single', 'index', 'search');
    }

    public function all()
    {
        $doctors = Doctor::all();
        return view('doctor.all', compact('doctors'));
    }

    public function index()
    {
        // dump(auth('doctor')->user());
        return view('doctor.index');
    }

    public function profile($username)
    {
        $doctor = Doctor::where('username', $username)->first();
        return view('doctor.profile', compact('doctor'));
    }

    public function home()
    {
        $doctor = auth('doctor')->user();
        $requests = $doctor->requests;
        $sessions = $doctor->sessions;
        return view('doctor.home', compact('requests', 'sessions'));
    }

    public function search(Request $request)
    {
        $query = $request->q;
        $doctors = Doctor::where('firstname', 'like', $query . '%')
            ->orWhere('lastname', 'like', $query . '%')->get();
        return view('doctor.search', compact('doctors'));
    }

}
