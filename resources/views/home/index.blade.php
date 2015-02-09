@extends("layouts.master")

@section("header")
    @include("layouts.header")
@stop

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <p>
                        Curabitur a orci velit. Donec eu lacus aliquam, tincidunt leo vel, tincidunt dolor. Quisque vel tristique justo. Pellentesque ac interdum mauris. Aliquam auctor tellus non neque finibus, et mollis purus fermentum. Nunc ut leo viverra, imperdiet mauris vitae, egestas lorem. Sed vel semper neque. Fusce rhoncus, ligula et venenatis vestibulum, nisl lectus ornare neque, in dignissim ante diam vitae magna. Nullam condimentum eleifend ipsum, sed pretium erat pellentesque posuere. Nunc at fringilla lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam quis sodales nulla.
            
                </p>
            </div>
            <div class="col-md-4">
                <p class="lead">sidebar</p>
            </div>
        </div>
    </div>
@stop

@section("footer")
    @include("layouts.footer")
@stop
