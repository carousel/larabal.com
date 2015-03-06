@if(\Session::has("message"))

    <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <ul>
            <li>{!!Session::get("message")!!}</li>
        </ul>
    </div>

@endif
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
@if(\Session::has("search_error"))

    <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <ul>
            <li>{!!Session::get("search_error")!!}</li>
        </ul>
    </div>

@endif

