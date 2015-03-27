@extends("layouts.admin")
@section("content")
<br>
    <ul>
        <p class="lead">Number of articles:</p>
        <li style="list-style-type:none">Number of articles: {!!$count_articles!!}</li>    
    </ul>
    <br>
    <ul>
        <p class="lead">Subscribers({!!count($subs)!!}):</p>
        @foreach($subs as $sub)
            <li style="list-style-type:decimal">{!!$sub->email!!}</li>    
        @endforeach
    </ul>
@stop
