@extends("layouts.master")
@section("content")
        <div class="container-fluid">
            <div class="page-header">
                @if(Auth::user())
                        {{link_to("/articles/create","Write article",["class"=>"btn-sm btn-primary btn-lg pull-right"])}}
                @endif
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h2>Welcome to laravel Balkan journey</h2>
                        </div>
                        <div class="col-md-4">
                            {!!Form::open(["url"=>"subscribe","metod"=>"POST","class"=>"form-inline","role"=>"form"])!!}
                            &nbsp;
                                {!!Form::label("Subcribe to our newsletter")!!}b
                                {!!Form::text("subscribe","",["class"=>"form-control","placeholder"=>"enter email"])!!}
                                {!!Form::submit("Go",["class"=>"btn btn-success btn-subscribe"])!!}
                            {!!Form::close()!!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 article">                       
                    @if (count($articles) > 0) 
                            <article>
                                @foreach($articles as $article)
                                    <span class="date">{{$article->created_at}}</span>
                                    <h4>{{$article->heading}}</h4>
                                    <p>{{$article->content}}</p>
                                @endforeach
                                
                                

                                        <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'larabal'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    
                                
                            </article>
                    @else
                        <article>
                            <h3>No articles yet</h3>
                        </article>
                    @endif
                </div>
                <div class="col-md-4">
                    <h4>Tags</h4>
                    <!--<ul>
                        @foreach($tags as $tag)
                            <li class="tags"><a href="#">{{$tag}}</a></li>
                        @endforeach
                    </ul>-->
                </div>
            </div>
        </div>
  <script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'larabal'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
    </script>
@endsection
        
