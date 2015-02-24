
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>larabal.com</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        
        <link rel = "stylesheet" href= "/bootstrap/css/bootswatch.min.css">
        <link rel = "stylesheet" href= "/bootstrap/css/style.css">
        <link rel = "stylesheet" href= "/css/sunburst.css">
    </head>
    <body>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
        <a href="/" class="navbar-brand">larabal.com</a>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
        <ul class="nav navbar-nav">
            <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Categories<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    @foreach($tags as $tag)
                        <li>
                            <a href="/category/{!!$tag!!}">{!!$tag!!}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li>
            <a href="#">Resources</a>
            </li>
            <li>
            <a href="mailto:miroslav.trninic@gmail.com">Contact</a>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="/auth/login" class="login">Login</a></li>
            @if(Auth::user())
                @if(Auth::user()->role == "user")
                    <li><a href="/auth/logout" >Logout</a></li>
                @endif
                @if(Auth::user()->role == "admin")
                    <li><a href="/admin" >{!!Auth::user()->role!!}</a></li>
                    <li><a href="/auth/logout" >Logout</a></li>
                @endif
                @if(Auth::user()->role == "admin+")
                    <li><a href="/admin" >{!!Auth::user()->role!!}</a></li>
                    <li><a href="/auth/logout" >Logout</a></li>
                @endif
            @endif
            <li>
                {!!Form::open(["url"=>"subscribe","class"=>"form-inline subscribe-form"])!!}
                {!!Form::label("subscribe: ")!!}
                {!!Form::email("email","",["class"=>"form-control","placeholder"=>"subscribe to our newsletter"])!!}
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
        <script>
            /*$("pre").remove();*/
            $("pre").addClass("linenums prettyprint");
            prettyPrint();
        </script>
    </body>
</html>

