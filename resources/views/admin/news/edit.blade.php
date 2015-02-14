@extends("layouts.admin")
@section("news-form")
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
                <span>* wrap your code with <strong> {!!htmlspecialchars("</pre> ")!!}</strong>tag</span>
                <br>
                    <p>
                        {!!Form::open(["url"=>"/admin/article/edit/" . $article['id'],"method"=>"POST"])!!}
                            {!!Form::label("Title")!!}
                            {!!Form::text("title",$article["title"],["class"=>"form-control content"])!!}
                            <br>
                            {!!Form::label("Body")!!}
                            {!!Form::textarea("body",$article["body"],["class"=>"form-control content"])!!}
                            <br>
                            {!!Form::label("Please select a tag")!!}
                            {!!Form::select("tag",$tags,$article["tag"],["class"=>"form-control"])!!}
                            <br>
                            {!!Form::label("Please select a level")!!}
                            {!!Form::select("level",$levels,$article["level"],["class"=>"form-control"])!!}
                            <br>
                            {!!Form::submit("Edit",["class"=>"btn btn-success pull-right"])!!}
                        {!!Form::close()!!}
<br>
                    </p>
            
            </div>
        </div>
@stop
