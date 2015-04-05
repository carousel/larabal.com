@extends("layouts.master")
@section("content")

<br>

<div class="col-md-2"></div>
<div class="col-md-8">
    <p>We would like to hear your voice. If you have any questions of suggestions to make this site better, please use this form to contact us: </p>
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
