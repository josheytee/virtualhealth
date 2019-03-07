@extends('layouts.material')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-content">
                <div class="row">
                    <h3>Register</h3>
                    <div class="divider"></div>
                    <br>
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="type" value="patient">
                        <input type="hidden" name="photo" value="patient">
                        <div class="input-field col s6 {{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="firstname">First Name</label>
                            <input id="firstname" type="text" name="firstname" value="{{ old('firstname') }}" required
                                   autofocus>
                            @if ($errors->has('firstname'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="input-field col s6 {{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname">Last Name</label>
                            <input id="name" type="text" name="lastname" value="{{ old('lastname') }}" required
                                   autofocus>
                            @if ($errors->has('lastname'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="input-field col s12 {{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username">Username</label>
                            <input id="email" type="text" name="username" value="{{ old('username') }}" required>
                            @if ($errors->has('username'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-Mail Address</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="input-field col s12 {{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label for="dob">Date of Birth</label>
                            <input id="email" type="text" name="dob" class="datepicker" value="{{ old('dob') }}"
                                   required>
                            @if ($errors->has('dob'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="input-field col s12 {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password</label>
                            <input id="password" type="password" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="input-field col s12">
                            <label for="web-confirm">Confirm Password</label>
                            <input id="password-confirm" type="password" name="password_confirmation" required>
                        </div>
                        <div class="col m12">
                            <button class="btn waves-effect waves-light" type="submit">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jquery')
    $('.datepicker').datepicker();
@endsection
