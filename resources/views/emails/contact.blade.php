<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>New Larabal contact</title>
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
        <ul>
            <p>Sender</p>
            <li style="list-style-type:none">{!!$email!!}</li>    

            <p>Subject</p>
            <li style="list-style-type:none">{!!$subject!!}</li>    

            <p>Body</p>
            <li style="list-style-type:none">{!!$body!!}</li>    
        </ul>
    </div>
        <script src="//code.jquery.com/jquery.js"></script>
    </body>
</html>
