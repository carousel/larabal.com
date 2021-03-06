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
                <h1>Add News</h1>
                <br>
                    <p>
                        {!!Form::open(["url"=>"/admin/news/create","method"=>"POST"])!!}
                            {!!Form::label("description")!!}
                            {!!Form::text("description","",["class"=>"form-control content"])!!}
                            <br>
                            {!!Form::label("href")!!}
                            {!!Form::text("href","",["class"=>"form-control content"])!!}
                            <br>
                            {!!Form::submit("Publish",["class"=>"btn btn-success pull-right"])!!}
                        {!!Form::close()!!}
                    </p>
            
            </div>
        </div>
@stop
