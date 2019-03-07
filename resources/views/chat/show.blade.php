@extends('layouts.doctor')

@section('content')
    <div class="container">
        <div class="chat">
            <div class="chat-title"> lorem ipsum</div>
            <div class="chat-box">
                <div class="chat-message right">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi atque commodi consectetur,
                    corporis cumque error eum excepturi explicabo hic molestias necessitatibus placeat quae quam quis
                    quod rerum sunt ullam voluptatum!
                </div>
                <div class="chat-message left">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi atque commodi consectetur,
                    corporis cumque error eum excepturi explicabo hic molestias necessitatibus placeat quae quam quis
                    quod rerum sunt ullam voluptatum!
                </div>
            </div>
            <div class="chat-control">
                <div class="row">
                    <div class="input-field inline col s9">
                        <textarea id="message" class="materialize-textarea"></textarea>
                        <label for="message">Message</label>
                    </div>
                    <div class="input-field inline col s3">
                        <input type="button" class="btn btn-default" value="send">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection