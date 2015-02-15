@extends("layouts.admin")
@section("article-form")
        <div class="container-fluid">
            <div class="page-header">
                @if($errors->all())
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <ul>
                        @foreach($errors->all() as $error)
                            <li>{!!$error!!}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                <h1>Write some article</h1>
                <span>* wrap your code with <strong> {!!htmlspecialchars("</pre> ")!!}</strong>tag, and escape "&lt;/ and &gt;"</span>
                <br>
                    <p>
                        {!!Form::open(["url"=>"/admin/article/create","method"=>"POST"])!!}
                            {!!Form::label("Title")!!}
                            {!!Form::text("title","",["class"=>"form-control content"])!!}
                            <br>
                            {!!Form::label("Body")!!}
                            {!!Form::textarea("body","<pre></pre>",["class"=>"form-control content"])!!}
                            <br>
                            {!!Form::label("Please select a tag")!!}
                            {!!Form::select("tag",$tags,"",["class"=>"form-control"])!!}
                            <br>
                            {!!Form::label("Please select a level")!!}
                            {!!Form::select("level",$levels,"",["class"=>"form-control"])!!}
                            <br>
                            {!!Form::submit("Publish",["class"=>"btn btn-success pull-right"])!!}
                        {!!Form::close()!!}
                    </p>
            
            </div>
        </div>
@stop
