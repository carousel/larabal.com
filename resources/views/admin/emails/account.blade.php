<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>New Larabal account</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <style>
        .email{

            padding:10px;
            float:none;
            margin:0 auto;
            margin-top:50px;
            background:#f0f0f0;
        }
        .unsubscribe{
            font-size:10px;
        }
        .safe{
            color:red; 
        };


    </style>
    </head>
    <body>
    <div class="col-md-6 email">
        <p>Hi, your account on <a href="http:///larabal.com">larabal.com</a> has been created</p>
        <p>Your password is: <span class="safe">{!!$plain_password!!}</span> Please keep it safe.</p>
    </div>
        <script src="//code.jquery.com/jquery.js"></script>
    </body>
</html>
