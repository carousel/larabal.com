@extends("layouts.admin")
@section("post-form")
        <div class="container-fluid">
            <div class="page-header">
            @if(\Session::has("message_success"))

                <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <ul>
                        <li>{!!Session::get("message_success")!!}</li>
                    </ul>
                </div>

            @endif
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
                <a class="btn btn-primary" href="/admin/send-to-subs">Send Content To Subscribers</a>
            </div>
            <div class="col-md-6">
                <h3>Create user</h3>
                {!!Form::open(["url"=>"/admin/admin-plus/create-user","method"=>"POST"])!!}
                    {!!Form::label("name")!!}
                    {!!Form::text("name","",["class"=>"form-control","placeholder"=>"enter name"])!!}
                    {!!Form::label("email")!!}
                    {!!Form::email("email","",["class"=>"form-control","placeholder"=>"enter email"])!!}
                    {!!Form::label("role")!!}
                    {!!Form::select("role",["admin"=>"admin","admin+"=>"admin+"],"",["class"=>"form-control"])!!}
                    <br>
                    {!!Form::submit("Create user",["class"=>"pull-right btn btn-success"])!!}
            {!!Form::close()!!}
        </div>
        </div>
@stop
