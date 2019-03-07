<?php

namespace VirtualHealth\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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
//        dump(Auth::user()->sessions);
        $user = Auth::user();
        return view('home', compact('user'));
    }

    /**
     * Show the user edit page.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
//        dump(Auth::user()->sessions);
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    /**
     * Show the user profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = Auth::user();
        return view('edit', compact('user'));
    }
}
