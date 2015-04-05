@extends("layouts.master")

@section("header")
    @include("layouts.header")
@stop

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-9 post" >
                @if($post)
                <span class="pull-right date">{!!$post["created_at"]->toFormattedDateString()!!}</span>
                    <h3 class="disqus_title">{!!$post["title"]!!}</h3>
                            <br>
                            <p class="disqus_body">
                            @if($post["body"])
                                {!!$post["body"]!!}
                            @endif
                            </p>
                            <br>
                    @if(Auth::check())
                        @if(Auth::user()->id === $post["user_id"] or \Auth::user()->role === "admin+")
                        <span class="pull-right edit-link"><a href="admin/post/edit/{!!$post["id"]!!}">Edit</a></span>
                        <span class="pull-right delete-link"><a href="admin/post/delete/{!!$post["id"]!!}">Delete</a></span>
                        @endif
                    @endif
                    <!--<span class="pull-right">author:&nbsp;{!!App\User::find($post->user_id)->name!!}</span>&nbsp;-->
                            Level:<span class={!!$post["level"]!!}>{!!$post["level"]!!}</span>&nbsp;
                            <span>Tag: <a href="/category/{!!$post["tag"]!!}">{!!$post["tag"]!!}</a></span>
                            <br>
                            <hr>
                            <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'larabal'; // required: replace example with your forum shortname
        var disqus_identifier = document.getElementsByClassName("disqus_title")[0].innerHTML;
        var disqus_url = "http://larabal/" + Math.random();
        /*console.log(disqus_identifier);*/
        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            @else
                <p class="lead">No posts yet</p>
            @endif
            </div>

            <div class="col-md-3">
                <p class="lead news-heading">News</p>
                @if(count($news))
                    <ul class="news-wrapper">
                    @foreach($news as $new)
                        <li class="news-feed">
                        <a href="{!!$new['href']!!}">{!!$new["description"]!!}</a>
                            @if(Auth::check())
                        @if(Auth::user()->id == $new["user_id"] or \Auth::user()->role == "admin+")
                                <span class="pull-right edit-link"><a href="admin/news/edit/{!!$new["id"]!!}">E</a></span>
                                <span class="pull-right delete-link"><a href="admin/news/delete/{!!$new["id"]!!}">D</a></span>
                                @endif
                            @endif
                        </li>
                    @endforeach
                    </ul>
                @else
                    <ul class="news-wrapper">
                        <li class="news-feed">
                            <p class="lead">No news yet</p>
                        </li>
                    </ul>
                @endif

            </div>
        </div>
    </div>
  <script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'larabal'; // required: replace example with your forum shortname
    var disqus_url = "http://larabal/" + Math.random();
    /*var disqus_identifier = Math.random();*/

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
    </script>
@stop

@section("footer")
    @include("layouts.footer")
@stop
