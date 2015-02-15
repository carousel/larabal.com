
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

