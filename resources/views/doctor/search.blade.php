@extends('layouts.doctor')

@section('content')
    <ul class="collection">
        <li class="collection-header "><h4>Search</h4></li>
        @foreach($doctors as $user)
            <li class="collection-item avatar">
                <img src="{{asset('images/i.png')}}" alt="" class="circle">
                <span class="title">{{ucwords($user->firstname) . ' '. ucwords($user->lastname)}}</span>
{{--                <p>{{$user->pivot->note}}</p>--}}
                {{--<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>--}}
            </li>
        @endforeach
    </ul>
@endsection