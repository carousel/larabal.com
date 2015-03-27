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
                <h1>Add laravel resource</h1>
                <br>
                    <p>
                    <p>
                        {!!Form::open(["url"=>"/admin/resources/create","method"=>"POST"])!!}
                            {!!Form::label("description")!!}
                            {!!Form::textarea("description","",["class"=>"form-control","placeholder"=>"say something about this"])!!}
                            <br>
                            {!!Form::label("url")!!}
                            {!!Form::text("url","",["class"=>"form-control content","placeholder"=>"enter url"])!!}
                            <br>
                            {!!Form::submit("Publish",["class"=>"btn btn-success pull-right"])!!}
                        {!!Form::close()!!}
                    </p>
                    </p>
            
            </div>
        </div>
@stop
