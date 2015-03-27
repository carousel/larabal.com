<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>larabal.com</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel = "stylesheet" href= "/bootstrap/css/bootswatch.min.css">
        <link rel = "stylesheet" href= "/bootstrap/css/style.css">
    </head>
    <body>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
        <ul class="nav navbar-nav">
            <li>
                <a href="/home">larabal.com</a>
            </li>
            <li>
                <a href="/admin/post/create">Write Post</a>
            </li>
            <li>
                <a href="/admin/news/create">Add News</a>
            </li>
            <li>
                <a href="/admin/resources/create">Add Resource</a>
            </li>
            <li>
                <a href="#">Manage Users</a>
            </li>
            <li>
                <a href="/admin/email">Email</a>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="/auth/login" class="login">Login</a></li>
            @if(Auth::user())
                @if(Auth::user()->role == "user")
                    <li><a href="/auth/logout" >Logout</a></li>
                @endif
                @if(Auth::user()->role == "admin")
                    <li><a href="/auth/logout" >Logout</a></li>
                @endif
                @if(Auth::user()->role == "admin+")
                    <li><a href="/auth/logout" >Logout</a></li>
                @endif
            @endif
        </ul>

        </div>
        </div>
        </div>


    </div>
</div>

<!-- Navbar
================================================== -->
        @yield("post-form")
        @yield("content")
        @yield("news-form")
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    </body>
</html>

