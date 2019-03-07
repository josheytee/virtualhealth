@extends('layouts.doctor')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m12">
                <div class="profile">
                    <div class="cover">
                        <img src="{{asset('images/hands.jpg')}}">
                    </div>
                    <div class="picture">
                        <img src="{{asset('images/i.png')}}" class="circle">
                    </div>
                    <div class="profile-content">
                        <span class="profile-title">Dr. {{ucwords($doctor->firstname) .' '.ucwords($doctor->lastname)}}</span>
                        @foreach($doctor->specialties as $specialty)
                            <div class="chip">
                                <img src="{{asset('images/i.png')}}" alt="Contact Person">
                                {{$specialty->name}}
                            </div>
                        @endforeach
                    <!-- Modal Trigger -->
                        @if(auth('doctor')->user()->username==$doctor->username)
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                               class="right waves-effect waves-light btn">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @else
                            <a class="waves-effect waves-light btn modal-trigger right" href="#modal1">Consult</a>
                            <!-- Modal Structure -->
                            <div id="modal1" class="modal">
                                <div class="modal-content">
                                    <h4>Request Appiontment</h4>
                                    <label for="time">Time</label>
                                    <input type="text" id="time" class="timepicker">
                                    <label for="date">Date</label>
                                    <input type="text" id="date" class="datepicker">

                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                                </div>
                            </div>
                        @endif
                        <br>
                        <br>
                        <section>
                            <header>Brief about me</header>
                            {{$doctor->about}}
                        </section>
                        <section>
                            <header>I specialize in</header>
                            <ul>
                                @foreach($doctor->specialties as $specialty)
                                    <li>{{$specialty->name}}</li>
                                @endforeach
                            </ul>
                        </section>
                        <section>
                            <header>Studied and trained b</header>
                            <ul>
                                @foreach($doctor->educations as $education)
                                    <li>{{$education->title}}</li>
                                @endforeach
                            </ul>
                        </section>
                        <section>
                            <header>Functions filled</header>
                            @foreach($doctor->educations as $education)
                                <li>{{$education->title}}</li>
                            @endforeach
                        </section>
                        <section>
                            <header>I have been practicing medicine since</header>
                            {{$doctor->dos}}
                        </section>
                        <section>
                            <header>Recommendations from others</header>

                        </section>
                        <section>
                            <header>I speak the following languages</header>

                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jquery')
    $('.modal').modal();
    $('.datepicker').datepicker();
    $('.timepicker').timepicker();

@endsection
