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
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Categories<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    @foreach($tags as $tag)
                        <li>
                            <a href="#">{!!$tag!!}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a href="#">Contact</a>
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
            <li>
                {!!Form::open(["url"=>"subscribe","class"=>"form-inline subscribe-form"])!!}
                {!!Form::label("subscribe: ")!!}
                {!!Form::email("email","",["class"=>"form-control","placeholder"=>"subscribe to our newsletter"])!!}
                <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-envelope"></i></button>
            {!!Form::close()!!}
            </li>
        </ul>

        </div>
        </div>
        </div>


        <div class="container">
        <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-6">
            <h1>larabal.com</h1>
            <p class="leader">Welcome to Laravel Balkan, a source of information about amazing <a href="http://laravel.com">Laravel</a> framework in this part of the world.</p>
        </div>
    </div>
</div>

<!-- Navbar
================================================== -->
