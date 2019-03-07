@extends('layouts.material')

@section('content')
    <div class="container">
        <h2 class="header">Profile</h2>
        <div class="card horizontal">
            <div class="card-image">
                <div class="card-image-edit">
                    <img src="{{asset('images/i.png')}}" class="card-img">
                    {{--<img src="img_avatar.png" alt="Avatar" class="image">--}}
                    <div class="card-image-edit-overlay">
                        <a href="#" class="icon" title="User Profile">
                            <i class="material-icons">edit</i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-stacked pp">
                <div class="card-content">
                    <form action="">
                        <div class="row profile-row">
                            <div class="col m4 profile-title">Full name</div>
                            <div class="profile-edit">
                                <div class="col m4">
                                    <div class="input-field {{ $errors->has('firstname') ? ' has-error' : '' }}">
                                        <label for="firstname">First Name</label>
                                        <input id="firstname" type="text" name="firstname"
                                               value="{{ old('firstname') }}" required
                                        >
                                        @if ($errors->has('firstname'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col m4">
                                    <div class="input-field {{ $errors->has('lastname') ? ' has-error' : '' }}">
                                        <label for="lastname">Last Name</label>
                                        <input id="name" type="text" name="lastname" value="{{ old('lastname') }}"
                                               required
                                        >
                                        @if ($errors->has('lastname'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row profile-row">
                            <div class="col m4 profile-title">Email</div>
                            <div class="col m8 profile-edit">
                                <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email">E-Mail Address</label>
                                    <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row profile-row">
                            <div class="col m4 profile-title">Username</div>
                            <div class="col m8 profile-edit">
                                <div class="input-field col s12 {{ $errors->has('username') ? ' has-error' : '' }}">
                                    <label for="username">Username</label>
                                    <input id="email" type="text" name="username" value="{{ old('username') }}"
                                           required>
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row profile-row">
                            <div class="col m4 profile-title">Date of Birth</div>
                            <div class="col m8 profile-edit">{{ Auth::user()->dob }}</div>
                        </div>
                    </form>
                </div>
                <div class="card-action center-align ">
                    <a href="{{route('profile.edit')}}" class="user-text-color">save</a>
                </div>
            </div>
        </div>
    </div>
@endsection
