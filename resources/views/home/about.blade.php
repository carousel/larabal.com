@extends("layouts.master")

@section("header")
    @include("layouts.header")
@stop

@section("content")
    <div class="container">
        <div class="row">
            <p class="lead">About</p>
            <p>Laravel Balkan is written and maintained by <a href="mailto:miroslav.trninic@gmail.com">Miroslav Trninic</a>, web developer from Banja Luka, Bosnia and Herzegovina. This site is my voluntary effort to present this amazing framework to people from this part of the world. It is made with <a href="http://laravel.com">Laravel5</a>, <a href="http://getbootstrap.com">Twitter Bootstrap</a> and deployed on <a href="https://digitalocean.com">Digital Ocean</a>.</p>
            

            <p> If you find this site useful and helful in your work please consider  a donation:
    </a>
        </p>
        <div class="paypal">
            
            <script async="async" src="https://www.paypalobjects.com/js/external/paypal-button.min.js?merchant=miroslav.trninic@gmail.com" 
    data-button="donate" 
    data-name="Donation to larabal.com" 
    data-amount="10"
></script>
            </div>
            <p class="paypal">Thank You</p>
        </div>
    </div>
@stop

@section("footer")
    @include("layouts.footer")
@stop
