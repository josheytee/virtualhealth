@extends('layouts.material')

@section('content')
    <div class="container">
        <div class="card hoverable">
            <div class="card-panel">
                <div class="row">
                    <h3 class="header">Login</h3>
                    <div class="divider"></div>
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="input-field col s12">
                            <input id="email" name="email" type="email" class="validate">
                            <label for="email">E-Mail Address</label>
                            @if ($errors->has('email'))
                                <span class="helper-text" data-error="wrong"
                                      data-success="right">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="input-field col s12">
                            <input name="password" id="password" type="password" class="validate">
                            <label for="password">Password </label>
                        </div>
                        <div class="col s12">
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in"
                                           name="remember" {{ old('remember') ? 'checked' : '' }}/>
                                    <span>Remember Me</span>
                                </label>
                            </p>
                        </div>
                        <div class="col m12">
                            <button class="btn waves-effect waves-light" type="submit">
                                Login
                            </button>
                            <a class="waves-effect waves-light btn-small" href="{{ route('password.request') }}">Forgot
                                Your
                                Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
