@extends("layouts.admin")
@section("content")
<br>
    <ul>
        <p class="lead">Number of postss:</p>
        <li style="list-style-type:none">Number of postss: {!!$count_posts!!}</li>    
    </ul>
    <br>
    <ul>
        <p class="lead">Subscribers({!!count($subs)!!}):</p>
        @foreach($subs as $sub)
            <li style="list-style-type:decimal">{!!$sub->email!!}</li>    
        @endforeach
    </ul>
@stop
