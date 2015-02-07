@extends("layouts.master")
@section("content")
        <div class="container-fluid">
            <div class="container">
                <br>
                <h3 style="font-weight:bold">About me</h3>
                <p>Hello,</p> 
    <p>My name is Miro. I am a full stack web developer from Banja Luka, Bosnia and Herzegovina. I am developing modern web applications using awesome PHP/Laravel freamework in the backened and Javascript/jQuery/Backbone on the front-end. I am dedicated Linux user, terminal and vim nerd</p> 
    <h4>In my day to day work I am using:</h4>
    <ul>
        <li><b>git</b> for version control</li>
        <li><b>ssh</b> for server management tasks</li>
        <li><b>Travis ci</b> for continous integration</li>
        <li><b>xdebug</b> for code profiling and debugging</li>
        <li><b>PHPUnit</b> for unit testing</li>
        <li><b>Domain Driven Design</b> principles (business to shape a code)</li>
        <li><b>REST API</b> design</li>
        <li><b>Bower</b> and <b>Gulp</b> for front-end package management</li>
    </ul>
<br>
    <h3 style="font-weight:bold">About this site</h3>
    <p>The goal of this site is to provide informations about modern web development with awesome Laravel framework.</p>
<p>If you are a business guy, in Laravel you will find young and powerfull PHP framework that can express your most demanding requirements. </p>
<p>If you are developer, Laravel can offer you beautiful design, modern PHP solutions and a great community.</p>
<br>
    <div  class="for-fluid">
        <div class="contact-form">
        <h3 id="got-questions">Got questions?</h3>
            {{Form::open(["url"=>"/contact","method"=>"POST"])}}
                <div class="form-group">
                    {{Form::label("name")}}
                    {{Form::text("name","",["class"=>"form-control","placeholder"=>"your name"])}}
                </div>
                <div class="form-group">
                    {{Form::label("email")}}
                    {{Form::email("email","",["class"=>"form-control","placeholder"=>"your email"])}}
                </div>
                {{form::label("message")}}
                {{form::textarea("message","",["class"=>"form-control","placeholder"=>"your message"])}}
                {{Form::submit("Send",["class"=>"btn btn-success pull-right"])}}
            {{Form::close()}}
        </div>
    </div>
            </div>
        </div>
@stop
