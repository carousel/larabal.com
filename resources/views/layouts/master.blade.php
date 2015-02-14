
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>larabal.com</title>
        <link rel = "stylesheet" href= "/bootstrap/css/bootstrap.css">
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
        <script src="/bootstrap/js/bootstrap.js"></script>
        <script src="/js/prettify.js"></script>
        <script>
            /*$("pre").remove();*/
            $("pre").addClass("linenums prettyprint");
            prettyPrint();
        </script>
    </body>
</html>

