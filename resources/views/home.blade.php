@extends('layouts.material')

@section('content')
    <div class="container">
        <div class="row">
            @if(auth())
                <ul class="collection" style="padding-left: 10px;padding-right: 5px">
                    <li class="collection-header ">
                        <h4>
                            Sessions
                            <span class="badge" data-badge-caption="session(s)">
                                {{$user->sessions->count()}}
                            </span>
                        </h4>
                    </li>
                    @foreach($user->sessions as $session)
                        <li class="collection-item avatar">
                            <img src="{{asset('images/i.png')}}" alt="" class="circle">
                            <span class="title">
                                <a href="{{route('session',$session->id)}}" class="user-text-color">
                                   Dr. {{$session->doctor->firstname . ' '. $session->doctor->lastname}}
                                </a>
                            </span>
                            <p>
                                <small>on {{ date('M j, Y h: ia',strtotime($session->created_at)) }}</small>
                            </p>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@endsection
