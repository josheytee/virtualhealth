@extends('layouts.doctor')

@section('content')
    @foreach ($doctors->chunk(4) as $chunk)
        <div class="container">
            <div class="row">
                @foreach($chunk as $doctor)
                    <div class="col s3">
                        <div class="card">
                            <div class="card-image">
                                <img src="{{asset('images/i.png')}}">
                            </div>
                            <div class="card-content">
                            <span class="card-title">
                                <a href="{{route('doctor',['username'=>$doctor->username])}}">{{$doctor->firstname}}</a>
                            </span>
                                @foreach($doctor->specialties as $specialty)
                                    <div class="chip">
                                        <img src="{{asset('images/i.png')}}" alt="Contact Person">
                                        {{$specialty->name}}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
@endsection