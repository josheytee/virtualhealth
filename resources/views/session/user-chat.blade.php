@extends('layouts.material')

@section('content')
    <meta name="session-id" content="{{$session->id}}">
    <div class="container-fluid">
        <div class="session-wrapper">
            <div class="row">
                <div class="col s3">
                    <collection v-bind:users="{{$doctors}}"/>
                </div>
                <div class="col s6">
                    <chat v-bind:chats="chats"
                          v-bind:type="'user'"
                          v-bind:session="{{$session}}"/>
                </div>
                <div class="col s3">
                    <information v-bind:user="{{$session->doctor}}" v-bind:type="'doctor'"/>
                </div>
            </div>
        </div>

@endsection