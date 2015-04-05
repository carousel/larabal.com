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
        }
        .unsubscribe{
            font-size:10px;
        }
    </style>
    </head>
    <body>
    <div class="col-md-6 email">
        <p>Hi, thanks for flying with larabal. <br>
        We have new post for this week. It is here:
        <a href="http:///larabal.com/category/show/{!!$post->id!!}">{!!$post->title!!}</a></p>
            <span class="unsubscribe">To unsubscribe, please follow this link:&nbsp;<a href="http://larabal.com/users/unsubscribe/{!!$email_id!!}">unsubscribe</a></span>
    </div>
        <script src="//code.jquery.com/jquery.js"></script>
    </body>
</html>
