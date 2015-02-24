@extends("layouts.master")


@section("content")
<div class="container">
    <div class="row">
        <br>
        {!!Form::open([""=>"",""=>"","class"=>"form-inline pull-right"])!!}
            {!!Form::label("filter")!!} by
            {!!Form::select("filter",["title","date published"],"",["class"=>"form-control"])!!}
            {!!Form::text("search","",["class"=>"form-control"])!!}
            {!!Form::submit("Search",["class"=>"btn btn-success"])!!}
        {!!Form::close()!!}
</div>
    @if(count($categories) > 0)
        <h3>{!!count($categories) . " articles found in " . $tag . " category"!!}</h3>
        <div class="row">
            <br>
        </div>
        
        <table>
            <tr>
                <th>Title</th>
                <th>Published</th>
            </tr>
    @foreach($categories as $category)
            <tr>
                <td><a href="#">{!!$category->title!!}</a></td>
                <td>{!!$category->created_at->toFormattedDateString()!!}</td>
            </tr>

    @endforeach
        </table>
    @else
        <h3>no articles found in {!!$tag !!} category</h3>
    @endif
    </div>
@endsection
