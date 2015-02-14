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
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
            <li>
            <a href="#">Donate</a>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="/auth/login" class="login">Login</a></li>
            @if(Auth::user())
                @if(Auth::user()->role == "user")
                    <li><a href="/auth/logout" >Logout</a></li>
                @endif
                @if(Auth::user()->role == "admin")
                    <li><a href="/admin" >{!!Auth::user()->role!!}</a></li>
                    <li><a href="/auth/logout" >Logout</a></li>
                @endif
                @if(Auth::user()->role == "admin+")
                    <li><a href="/admin" >{!!Auth::user()->role!!}</a></li>
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
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                {!!Form::open(["url"=>"subscribe","class"=>"form-inline"])!!}
                <p class="subscribe">Subscribe to our newsletter</p>
                {!!Form::email("email","",["class"=>"form-control","placeholder"=>"subscribe to our newsletter"])!!}
                {!!Form::submit("submit",["class"=>"btn btn-success"])!!}
            {!!Form::close()!!}
            </div>
    </div>
</div>

<!-- Navbar
================================================== -->
