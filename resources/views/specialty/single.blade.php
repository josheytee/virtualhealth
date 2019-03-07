@extends('layouts.material')

@section('content')

    <h3>
        {{$specialty->name}}
    </h3>
    @foreach ($specialty->doctors->chunk(4) as $chunk)
        <div class="row">
            @foreach ($chunk as $doctor)
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <img class="activator" src="{{asset('images/i.png')}}">
                        </div>
                        <div class="card-content">
                            <a href="{{route('specialty',$doctor->slug)}}">
                                <span class="card-title">{{$doctor->name}}</span>
                            </a>
                            <p>{{$doctor->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection