@extends("layouts.admin")
@section("article-form")
        <div class="container-fluid">
            <div class="page-header">
                <h1>Write some article</h1>
                <span>* please wrap your code with <strong> {!!htmlspecialchars("<pre>")!!}</strong>tag</span>
                <br>
                    <p>
                        {!!Form::open([])!!}
                            {!!Form::label("Heading")!!}
                            {!!Form::text("heading","",["class"=>"form-control content"])!!}
                            <br>
                            {!!Form::label("Content")!!}
                            {!!Form::textarea("content","",["class"=>"form-control content"])!!}
                            <br>
                            {!!Form::label("Please select a tag")!!}
                            {!!Form::select("tag",$tags,"",["class"=>"form-control"])!!}
                            <br>
                            {!!Form::label("Please select a level")!!}
                            {!!Form::select("level",$levels,"",["class"=>"form-control"])!!}
                            <br>
                            {!!Form::submit("Publish",["class"=>"btn btn-danger pull-right"])!!}
                        {!!Form::close()!!}
                    </p>
            
            </div>
        </div>
@stop
