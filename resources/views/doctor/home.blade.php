@extends('layouts.doctor')

@section('content')
    <ul class="collection">
        <li class="collection-header "><h4>Requests</h4></li>
        @foreach($requests as $request)
            <li class="collection-item avatar">
                <img src="{{asset('images/i.png')}}" alt="" class="circle">
                <span class="title">{{ucwords($request->firstname) . ' '. ucwords($request->lastname)}}</span>
                <p>{{$request->pivot->note}}</p>
                <!-- Switch -->
                <div class="secondary-content">
                    <button class="btn waves-effect">accept</button>
                    <button class="btn red waves-effect">reject</button>
                </div>
            </li>
        @endforeach
    </ul>
    <ul class="collection">
        <li class="collection-header "><h4>Sessions</h4></li>
        @foreach($sessions as $session)
            <li class="collection-item avatar">
                <a href="{{route('doctors.session',$session->id)}}">
                    <img src="{{asset('images/i.png')}}" alt="" class="circle">
                    <span class="title">{{$session->firstname. ' '. $session->lastname}}</span>
                    <p>{{$session->pivot->note}}</p>
                    <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                </a>
            </li>
        @endforeach
    </ul>
@endsection