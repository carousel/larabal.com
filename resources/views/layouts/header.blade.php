<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
        <a href="/" class="navbar-brand">larabal.com</a>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
        <ul class="nav navbar-nav">
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Link<span class="caret"></span></a>
        <ul class="dropdown-menu" aria-labelledby="themes">
        <li><a href="#">Link1</a></li>
        <li class="divider"></li>
        <li><a href="#">Link2</a></li>
        <li><a href="#">Link3</a></li>
        <li><a href="#">Link4</a></li>
        </ul>
        </li>
        <li>
        <a href="">Link</a>
        </li>
        <li>
        <a href="#">Link</a>
        </li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Link<span class="caret"></span></a>
        <ul class="dropdown-menu" aria-labelledby="download">
        <li><a href="#">Empty</a></li>
        <li class="divider"></li>
        <li><a href="#">Empty</a></li>
        <li class="divider"></li>
        <li><a href="#">Empty</a></li>
        </ul>
            <li>
            <a href="#">Donate</a>
            </li>
        </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="/auth/login" class="login">Login</a></li>
            @if(Auth::user())
                @if(Auth::user()->role == "user")
                    <li><a href="/auth/logout" >Logout</a></li>
                @endif
                @if(Auth::user()->role == "admin")
                    <li><a href="/admin" >Admin+</a></li>
                    <li><a href="/auth/logout" >Logout</a></li>
                @endif
                @if(Auth::user()->role == "admin+")
                    <li><a href="/admin" >Admin+</a></li>
                    <li><a href="/auth/logout" >Logout</a></li>
                @endif
            @endif
        </ul>

        </div>
        </div>
        </div>


        <div class="container">

        <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-6">
            <h1>larabal.com</h1>
            <p class="lead">Welcome to Laravel Balkan journey</p>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6 subscribe">
            {!!Form::open(["class"=>"form-inline"])!!}
                {!!Form::label("subscribe")!!}&nbsp;
                {!!Form::text("subscribe","",["class"=>"form-control","placeholder"=>"subscribe to our newsletter"])!!}
                {!!Form::submit("submit",["class"=>"btn btn-success"])!!}
            {!!Form::close()!!}
            </div>
    </div>
</div>

<!-- Navbar
================================================== -->
