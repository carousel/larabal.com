<footer>
    <div class="container">
    <div class="navbar navbar-default navbar-fixed-bottom">
        <div class="foot">
            <span class="credits">made by <a href="/" rel="nofollow">laravel balkan&nbsp;</a> <a href="mailto:miroslav.trninic@gmail.com"><i class="glyphicon glyphicon-envelope"></i></a></span>
            <a href="/auth/login" class="login">Login</a>
            @if(Auth::user())
                <ul class="list-unstyled pull-right">
                    @if(Auth::user()->role == "user")
                        <li><a href="/auth/logout" >logout</a></li>
                    @endif
                    @if(Auth::user()->role == "admin")
                        <li><a href="/admin" >{!!Auth::user()->role!!}</a></li>
                        <li><a href="/auth/logout" >logout</a></li>
                    @endif
                    @if(Auth::user()->role == "admin+")
                        <li><a href="/admin" >{!!Auth::user()->role!!}</a></li>
                        <li><a href="/auth/logout" >logout</a></li>
                    @endif
                </ul>
            @endif
            </div>
        </div>
    </div>
</footer>
