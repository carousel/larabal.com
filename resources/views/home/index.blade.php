@extends("layouts.master")

@section("header")
    @include("layouts.header")
@stop

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-8 article" >
                @foreach($articles as $article )
                    <p class="lead">{!!$articles["title"]!!}</p>
                        <p>
                            {!!$articles["body"]!!}                        
                            {!!link_to("#","read more")!!}
                        </p>
                @endforeach
            </div>
            <div class="col-md-4">
                <p class="lead">sidebar (for news)</p>
            </div>
        </div>
    </div>
@stop

@section("footer")
    @include("layouts.footer")
@stop
