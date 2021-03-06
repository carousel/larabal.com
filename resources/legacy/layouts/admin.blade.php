<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>larabal.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="qxpA18aFK3r78_Lry1dZmL-95JK9O97xx4pItm94QUo" />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css" media="screen">
    <link rel="stylesheet" href="/css/sunburst.css" media="screen">
    @yield("css")
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
            <a href="../" class="navbar-brand"><b>larabal.com</b></a>
            <h3>Admin Area</h3>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
          </ul>

          <ul class="nav navbar-nav navbar-right">
                @if(Session::has("user_email"))
                    <li class="dropdown">
                    <a href="#" style="color:black;font-weight:bold" data-toggle="dropdown">{{Session::get("user_email")}}<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/signout">Sign Out</a></li>
                        </ul>
                    </li>
                @else
                    <li><a href="/signin-form" style="color:white">Sign In</a></li>
                    <!--<li><a href="/signup-form">Sign Up</a></li>-->
                @endif
          </ul>

        </div>
      </div>
    </div>


    <div class="container">
        @yield("content")
    </div>

  </body>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="/js/prettify.js"></script>
    @yield("js")
    <script>
        $("pre").addClass("linenums prettyprint");
        prettyPrint();
    </script>
</html>

