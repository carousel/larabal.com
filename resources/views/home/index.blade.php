@extends("layouts.master")

@section("header")
    @include("layouts.header")
@stop

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-8 article" >
                @if($article)
                <span class="pull-right">{!!$article["created_at"]->toFormattedDateString()!!}</span>
                            <br>
                    <h3>{!!$article["title"]!!}</h3>
                            <br>
                            <p>
                            {!!$article["body"]!!}
                            </p>
                            <br>
                    @if(Auth::check())
                        @if(Auth::user()->role == "admin+")
                        <span class="pull-right edit-link"><a href="admin/article/edit/{!!$article["id"]!!}">Edit</a></span>
                        @endif
                    @endif
                    <!--<span class="pull-right">author:&nbsp;{!!App\User::find($article->user_id)->name!!}</span>&nbsp;-->&nbsp;
                            <span>Tag: <a href="#">{!!$article["tag"]!!}</a></span>
                            <br>
                            <hr>
            @else
                <p class="lead">No articles yet</p>
            @endif
            </div>

            <div class="col-md-4 news">
                <p class="lead">News around Laravel</p>
            </div>
        </div>
    </div>
@stop

@section("footer")
    @include("layouts.footer")
@stop
