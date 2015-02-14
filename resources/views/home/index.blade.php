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
                    <h3 class="disqus_title">{!!$article["title"]!!}</h3>
                            <br>
                            <p class="disqus_body">
                            {!!$article["body"]!!}
                            </p>
                            <br>
                    @if(Auth::check())
                        @if(Auth::user()->id == $article["user_id"])
                        <span class="pull-right edit-link"><a href="admin/article/edit/{!!$article["id"]!!}">Edit</a></span>
                        <span class="pull-right delete-link"><a href="admin/article/delete/{!!$article["id"]!!}">Delete</a></span>
                        @endif
                    @endif
                    <!--<span class="pull-right">author:&nbsp;{!!App\User::find($article->user_id)->name!!}</span>&nbsp;-->
                            <span>Level: <a href="#" class={!!$article["level"]!!}>{!!$article["level"]!!}</a></span>&nbsp;
                            <span>Tag: <a href="#">{!!$article["tag"]!!}</a></span>
                            <br>
                            <hr>
                            <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'larabal'; // required: replace example with your forum shortname
        var disqus_identifier = document.getElementsByClassName("disqus_title")[0].innerHTML;
        var disqus_url = "http://larabal.com/" + Math.random();
        console.log(disqus_identifier);
        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            @else
                <p class="lead">No articles yet</p>
            @endif
            </div>

            <div class="col-md-4 news">
                <p class="lead">News around Laravel</p>
                @if(count($news))
                    @foreach($news as $new)
                    <p>{!!$new["description"]!!}&nbsp;
                        <span><a href={!!$new['href']!!}>{!!$new["title"]!!}</a></span>
                    </p>
                        <hr>
                    @endforeach
                @else
                    <p class="lead">No news yet</p>
                @endif

            </div>
        </div>
    </div>
  <script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'larabal'; // required: replace example with your forum shortname
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
