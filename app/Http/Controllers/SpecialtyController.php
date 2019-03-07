<?php

namespace VirtualHealth\Http\Controllers;

use VirtualHealth\Specialty;

class SpecialtyController extends Controller
{
    public function all()
    {
        $specialties = Specialty::all();
        return view('specialty.all', compact('specialties'));
    }

    public function single($slug)
    {
        $specialty = Specialty::where('slug', $slug)->first();
        return view('specialty.single', compact('specialty'));
    }
}
