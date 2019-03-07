<?php

namespace VirtualHealth\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use VirtualHealth\Session;

class SessionController extends Controller
{
    public function show(Session $session)
    {
        $doctors = Session::where('user_id', $session->user->id)
            ->get()->map(function ($item, $key) {
                return $item->doctor;
            });
        //the doctor object is needed in the template
        $session->doctor->id;
        $user = auth()->user();
//        $user->sessions;
        return view('session.user-chat', compact('session', 'doctors', 'user'));
    }

    public function showDoctor(Session $session)
    {
        $users = Session::where('doctor_id', $session->doctor->id)
            ->get()->map(function ($item, $key) {
                return $item->user;
            });
        //the user object is needed in the template
        $session->user->id;
        return view('session.doctor-chat', compact('session', 'users'));

    }

    public function chats(Session $session)
    {
        return $session->chats;
    }


    public function sendDoctorChat(Request $request)
    {
        $doctor = auth('doctor')->user();
        $chat = $doctor->chats()->create([
            'session_id' => $request->session_id,
            'type' => $request->type,
            'data' => $request->data,
//            'read_at' => new \DateTime(),
        ]);
        return $chat;
    }

    public function sendUserChat(Request $request)
    {
        $user = Auth::user();
        $chat = $user->chats()->create([
            'session_id' => $request->session_id,
            'type' => $request->type,
            'data' => $request->data,
//            'read_at' => new \DateTime(),
        ]);
        return $chat;
    }

    public function sendUserFile(Request $request)
    {
        if ($file = $request->file('file')) {
            $data = $file->store("/uploads/$request->session_id");
            $doctor = Auth::user();
            $chat = $doctor->chats()->create([
                'session_id' => $request->session_id,
                'type' => $request->type,
                'data' => $data,
//            'read_at' => new \DateTime(),
            ]);
            return $chat;
        }
    }

    public function sendDoctorFile(Request $request)
    {
        if ($file = $request->file('file')) {
            $data = $file->store("/uploads/$request->session_id");
            $doctor = Auth::guard('doctor')->user();
            $chat = $doctor->chats()->create([
                'session_id' => $request->session_id,
                'type' => $request->type,
                'data' => $data,
//            'read_at' => new \DateTime(),
            ]);
            return $chat;
        }
    }

    public function handleDownload(Session $session, $file)
    {
        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($file) . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            readfile($file);
            exit;
        }
    }
}
