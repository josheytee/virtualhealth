@extends('layouts.doctor')

@section('content')
    @foreach ($specialties->chunk(4) as $chunk)
        <div class="row">
            @foreach ($chunk as $specialty)
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <img class="activator" src="{{asset('images/i.png')}}">
                        </div>
                        <div class="card-content">
                            <a href="{{route('specialty',$specialty->slug)}}">
                                <span class="card-title">{{$specialty->name}}</span>
                            </a>
                            <p>{{$specialty->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection