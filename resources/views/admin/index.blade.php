@extends("layouts.admin")
@section("content")
<br>
    @if(\Auth::user()->role == "admin+")
        <br>
            <ul>
                <p class="lead">Number of posts: {!!$count_posts!!}</p>    
            </ul>
            <br>
            <ul>
                <p class="lead">Subscribers({!!count($subs)!!}):</p>
                @foreach($subs as $sub)
                    <li style="list-style-type:decimal">{!!$sub->email!!}</li>    
                @endforeach
            </ul>
    @else
        <br>
            <ul>
                <p class="lead">Number of posts: {!!$count_posts!!}</p>    
                @if(count($status) == "0")
                    <p class="lead">Status: Not subscribed</p>    
                @else
                    <p class="lead">Status: Subscribed</p>    
                @endif
            </ul>
            <br>
    @endif
@stop
