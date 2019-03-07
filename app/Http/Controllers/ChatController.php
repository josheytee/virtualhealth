<?php

namespace VirtualHealth\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use VirtualHealth\Chat;
use VirtualHealth\Doctor;

class ChatController extends Controller
{

    public function index()
    {
        $doctors = Doctor::all();
        return view('chat.index')->withDoctors($doctors);
    }

    public function show($id)
    {
        $doctor = Doctor::find($id);
        return view('chat.show')->withDoctor($doctor);
    }

    public function getChat($id)
    {
        $chats = Chat::where(function ($query) use ($id) {
            $query->where('user_id', '=', Auth::user()->id)
                ->where('doctor_id', '=', $id);
        })->orWhere(function ($query) use ($id) {
            $query->where('user_id', '=', $id)
                ->where('doctor_id', '=', Auth::user()->id);
        })->get();
        return $chats;
    }
}
