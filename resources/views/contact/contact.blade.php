@extends("layouts.master")
@section("header")
    @include("layouts.header")
@stop
@section("content")
<div class="container">
    <p class="your-voice">We would like to hear your voice. If you have any questions of suggestions to make this site better, please use this form to contact us: </p>
    <br>
    {!!Form::open([])!!}
        {!!Form::label("email")!!}
            {!!Form::text("email","",["class"=>"form-control"])!!}
        {!!Form::label("subject")!!}
            {!!Form::text("subject","",["class"=>"form-control"])!!}
        {!!Form::label("body")!!}
            {!!Form::textarea("body","",["class"=>"form-control"])!!}
            <br>
        {!!Form::submit("Submit",["class"=>"btn btn-success pull-right"])!!}
    {!!Form::close()!!}


</div>

@stop
@section("footer")
    @include("layouts.footer")
@stop
