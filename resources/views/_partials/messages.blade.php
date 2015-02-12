@if(\Session::has("message"))

    <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <ul>
            <li>{!!Session::get("message")!!}</li>
        </ul>
    </div>

@endif

