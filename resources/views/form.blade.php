<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Form</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        @foreach($errors->all() as $error)
                <div class="alert alert-danger alert-dismissable">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <ul>
                        <li>{!!$error!!}</li>
                    </ul>
                </div>
            @endforeach
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                {!!Form::open(["url"=>"form"])!!}
                    {!!Form::label("name")!!}
                    {!!Form::text("name","",["class"=>"form-control"])!!}
                        <br>
                    {!!Form::submit("Submit",["class"=>"btn  btn-danger pull-right"])!!}
                {!!Form::close()!!}
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        
    </body>
</html>
