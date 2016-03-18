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
	            background-color:#ccc;
            }
            .footer{
                padding:6px;
                height:30px;
                text-align:center;
            
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
            <ul>
                <p>Sender</p>
                <li style="list-style-type:none">{!!$email!!}</li>    

                <p>Subject</p>
                <li style="list-style-type:none">{!!$subject!!}</li>    

                <p>Body</p>
                <li style="list-style-type:none">{!!$body!!}</li>    
            </ul>
        </div>    
        <div class="col-md-3"></div>
    
    </div>
    <div class="row footer">
    </div>
        
        <script src="//code.jquery.com/jquery.js"></script>
    </body>
</html>
