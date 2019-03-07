@extends('layouts.doctor')

@section('content')
    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
                <h1 class="header center deep-orange-text">Our Secret Is Our Doctors </h1>
                <div class="row center">
                    <h5 class="header col s12 white-text">
                        We believe that our doctors are the application core value and the game changers in our
                        development.
                    </h5>
                </div>
                <div class="row center">
                    <a href="{{route('doctors.register')}}" id="download-button"
                       class="btn-large waves-effect waves-light deep-orange">Sign Up</a>
                </div>
            </div>
        </div>
        <div class="parallax">
            <img src="{{ asset('images/doc_7.jpg') }}" alt="">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col m6">
            <img src="{{ asset('images/care_3.jpg') }}" alt="" style="width: 100%">
        </div>
        <div class="doctor-section col m6">
            <h2>Work From The Comfort Of Your Home</h2>
            <p>
                You can serve new patients and follow up with the existing once just once click away.
            </p>
        </div>
    </div>

    <div class="features-blocks-container">
        <div class="container">
            <h2 class="features-blocks-title" style="text-align: center;"> The Benefits Of Joining VH Clinic</h2>
            <ul class="features-blocks">
                <li class="features-blocks-item">
                    <img src="{{ asset('images/icons/more-money.svg') }}" alt="">
                    <h4>Higher Income</h4>
                    <p>
                        Gaining higher income by serving more patients in your available time and with zero clinic costs
                        can be highly beneficial for your financial state. </p>
                </li>
                <li class="features-blocks-item">
                    <img src="{{ asset('images/icons/experience.svg') }}" alt="">
                    <h4>Learn From The Other Doctors</h4>
                    <p>
                        You will be exposed to top doctors in your specialty and other specialties too in one community
                        where you can share experiences and learn new skills and practices </p>
                </li>
                <li class="features-blocks-item">
                    <img src="{{ asset('images/icons/digital-reputation.svg') }}" alt="">
                    <h4>Build a Digital Reputation</h4>
                    <p>
                        With VH Clinic you gain repetition and gain higher patients rate, that will put you on top and
                        will
                        get you the best reward ever financially and emotionally from the served users. </p>
                </li>
                <li class="features-blocks-item">
                    <img src="{{ asset('images/icons/profile.svg') }}" alt="">
                    <h4>Get Your Own Personalized Profile</h4>
                    <p>
                        With virtual clinic you can have your own manageable profile where you can list all your
                        certificates and experiences, upload identification video and personal picture. </p>
                </li>
            </ul>
        </div>
    </div>

@endsection

@section('jquery')
    $(document).ready(function(){
    $('.parallax').parallax();
    });
@endsection
