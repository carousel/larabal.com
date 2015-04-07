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
	            background-color:#ccc;
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
	            background-color:#ccc;
            
            }
            .footer span{
                font-size:10px;
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
            
            You are now subscribed to our mailing list. We will keep you updated with the latest posts and news around Laravel, modern web development and lot more.<br><br>Stay tuned.
            
            
            </p>
        </div>    
        <div class="col-md-3"></div>
    
    </div>
    <div class="row footer">
            <span>To unsubscribe, please follow this link:&nbsp;<a href="http://larabal.com/users/unsubscribe/{!!$email_id!!}">unsubscribe</a></span>
    </div>
        
        <script src="//code.jquery.com/jquery.js"></script>
    </body>
</html>
