@extends("layouts.admin")
@section("post-form")
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
                <h1>Edit this post</h1>
                <span>* wrap your code with <strong> {!!htmlspecialchars("</pre> ")!!}</strong>tag</span>
                <br>
                    <p>
                        {!!Form::open(["url"=>"/admin/post/edit/" . $post['id'],"method"=>"POST"])!!}
                            {!!Form::label("Title")!!}
                            {!!Form::text("title",$post["title"],["class"=>"form-control content"])!!}
                            <br>
                            {!!Form::label("Body")!!}
                            {!!Form::textarea("body",$post["body"],["class"=>"form-control content"])!!}
                            <br>
                            {!!Form::label("Please select a tag")!!}
                            {!!Form::select("tag",$tags,$post["tag"],["class"=>"form-control"])!!}
                            <br>
                            {!!Form::label("Please select a level")!!}
                            {!!Form::select("level",$levels,$post["level"],["class"=>"form-control"])!!}
                            <br>
                            {!!Form::submit("Edit",["class"=>"btn btn-success pull-right"])!!}
                        {!!Form::close()!!}
<br>
                    </p>
            
            </div>
        </div>
@stop
