
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Larabal.com - Laravel Balkan,news about Laravel and PHP</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        
        <link rel = "stylesheet" href= "/bootstrap/css/bootswatch.min.css">
        <link rel = "stylesheet" href= "/bootstrap/css/style.css">
        <link rel = "stylesheet" href= "/css/sunburst.css">
    </head>
    <body>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
        <a href="/home" class="navbar-brand">Home</a>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
        <ul class="nav navbar-nav">
            <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Category<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    @foreach($tags as $tag)
                        <li>
                            <a href="/category/{!!$tag!!}">{!!$tag!!}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li>
            <a href="/resources">Resources</a>
            </li>
            <li>
            <a href="/about">About</a>
            </li>
            <li>
            <a href="/contact">Contact</a>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class="twitter">
<a href="https://twitter.com/larabalcom" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false">Follow @larabalcom</a>
            </li>


                <li>
                {!!Form::open(["url"=>"subscribe","class"=>"form-inline subscribe-form"])!!}
                {!!Form::email("email","",["class"=>"form-control subscribe-input","placeholder"=>"subscribe to our newsletter"])!!}
                <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-envelope"></i></button>
            {!!Form::close()!!}
            </li>
        </ul>

                </div>
            </div>
        </div>
        @include("_partials/messages")
        @yield("header")
        @yield("content")
        @yield("footer")
        
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script src="/js/prettify.js"></script>
        <script src="/js/twitter.js"></script>
        <script>
            /*$("pre").remove();*/
            $("pre").addClass("linenums prettyprint");
            prettyPrint();
        </script>
    </body>
</html>

