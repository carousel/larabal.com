<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Larabal.com subscription</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <style>
        .email{

            padding:10px;
            float:none;
            margin:0 auto;
            margin-top:50px;
            background:#f0f0f0;
            border-bottom:2px solid #000;
            border-right:2px solid #000;
        }
        .unsubscribe{
            font-size:10px;
        }
    </style>
    </head>
    <body>
    <div class="col-md-6 email">
        <p>Hi,</p>
            Welcome to <a href="http://larabal.com">larabal.com</a>
            You are now subscribed to our mailing list.
            <br>
            <br>
            <span class="unsubscribe">To unsubscribe, please follow this link:&nbsp;<a href="http://larabal.com/users/unsubscribe/{!!$email_id!!}">unsubscribe</a></span>

        </p>
    </div>
        <script src="//code.jquery.com/jquery.js"></script>
    </body>
</html>
