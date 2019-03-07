@extends('layouts.material')

@section('content')
    <div class="container">
        <h2 class="header">Profile</h2>
        <div class="card horizontal">
            <div class="card-image">
                <img src="{{asset('images/i.png')}}">
            </div>
            <div class="card-stacked pp">
                <div class="card-content">
                    <div class="row profile-row">
                        <div class="col m4 profile-title">Full name</div>
                        <div class="profile-text">
                            <div class="col m4">{{ Auth::user()->firstname }}</div>
                            <div class="col m4">{{ Auth::user()->lastname }}</div>
                        </div>
                    </div>
                    <div class="row profile-row">
                        <div class="col m4 profile-title">Email</div>
                        <div class="col m8 profile-text">{{ Auth::user()->email }}</div>
                    </div>
                    <div class="row profile-row">
                        <div class="col m4 profile-title">Username</div>
                        <div class="col m8 profile-text">{{ Auth::user()->username }}</div>
                    </div>
                    <div class="row profile-row">
                        <div class="col m4 profile-title">Date of Birth</div>
                        <div class="col m8 profile-text">{{ Auth::user()->dob }}</div>
                    </div>

                </div>
                <div class="card-action">
                    <span>
                        <a href="{{ route('logout') }}" class="user-text-color"
                           onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </span>
                    <a href="{{route('profile.edit')}}" class="user-text-color">edit</a>
                </div>
            </div>
        </div>
    </div>
@endsection
