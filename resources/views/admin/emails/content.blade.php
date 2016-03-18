<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Email Template</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        
        <style>
            .footer a:link{
                text-decoration:none;
            }
            .header{
                padding:5px;
                text-align:center;
                height:30px;
            }
            .body{
                margin-top:20px;
                margin-bottom:20px;
                height:100%;
                padding:40px;
	            background-color:#ECF8FF;
            }
            .footer{
                padding:6px;
                height:30px;
                text-align:center;
            
            }
            .footer span{
                font-size:10px;
            }
            .lead{
                margin-top:25px;
                text-align:center;
            }
            
        </style>
    </head>
    <body>

    <div class="container-fluid">
        <div class="row header"></div>
        <div class="col-md-3"></div>
        <div class="row col-md-6 body">
            <p>Hi,</p>
            
            <p>thanks for flying with <a href="http://larabal.com">larabal. </a>
            Checkout new content for this week:
            <div class="lead"><a class="btn-lg btn-danger" href="http:///larabal.com/category/show/{!!$post->id!!}">{!!$post->title!!}</a></p>
        Stay tuned.
            </div>
            
            
            
            </p>
        </div>    
        <div class="col-md-3"></div>
    
    </div>
    <div class="row footer">
            <span>To unsubscribe, please follow this link:&nbsp;<a href="http://larabal.com/users/unsubscribe/{!!1234!!}">unsubscribe</a></span>
    </div>
        
        <script src="//code.jquery.com/jquery.js"></script>
    </body>
</html>
