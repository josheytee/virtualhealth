@extends('layouts.doctor')

@section('content')
    <meta name="session-id" content="{{$session->id}}">
    <div class="container-fluid">
        <div class="session-wrapper">
            <div class="row">
                <div class="col s3">
                    <collection v-bind:users="{{$users}}"/>
                </div>
                <div class="col s6 ">
                    <chat v-bind:chats="chats"
                          v-bind:type="'doctor'"
                          v-bind:session="{{$session}}"/>
                </div>
                <div class="col s3">
                    <information v-bind:user="{{$session->user}}" v-bind:type="'user'"/>
                </div>
            </div>
        </div>

@endsection