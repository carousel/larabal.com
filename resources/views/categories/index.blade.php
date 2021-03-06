@extends("layouts.master")
@section("header")
    @include("layouts.header")
@stop
@section("content")
<div class="container">
    <div class="row filter-by">
        {!!Form::open(["url"=>"/search",""=>"","class"=>"form-inline"])!!}
            {!!Form::label("search_by_title")!!}&nbsp;
            {!!Form::text("search_by_title","",["class"=>"form-control","placeholder"=>"enter title"])!!}
            &nbsp;
            {!!Form::label("or_date_published")!!}&nbsp;
            {!!Form::select("or_date_published",["< week"=>"< week","< month"=>"< month","<  three months"=>"< three months"],"",["class"=>"form-control select"])!!}

            {!!Form::submit("Search",["class"=>"btn btn-success"])!!}
        {!!Form::close()!!}
    </div>
    @if(Session::has("match"))
        @if(count($categories) > 0)
            <h3>{!!count($categories) . " articles found in " . $tag . " category"!!}</h3>
            <div class="row">
                <br>
            </div>        
            <table id="category-results">
                <tr>
                    <th>Title</th>
                    <th>Published</th>
                </tr>
        @foreach($categories as $category)
                <tr>
                    <td><a href="/category/show/{!!$category->id!!}">{!!$category->title!!}</a></td>
                    <td>{!!$category->created_at->toFormattedDateString()!!}</td>
                </tr>

        @endforeach
            </table>
        @endif
        @else
        @if(count($categories) > 0)
            @if(count($categories) == 1)
            <h3>{!!count($categories) . " article found in <em>" . $tag . "</em> category"!!}</h3>
            @endif
            @if(count($categories) > 1)
            <h3>{!!count($categories) . " articles found in <em>" . $tag . "</em> category"!!}</h3>
            @endif
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
                    <td><a href="/category/show/{!!$category->id!!}">{!!$category->title!!}</a></td>
                    <td>{!!$category->created_at->toFormattedDateString()!!}</td>
                </tr>

        @endforeach
            </table>
        @else
        <h3>No articles found in <em>{!!$tag !!}</em> category</h3>
        @endif
        @endif
    </div>
@endsection
@section("footer")
    @include("layouts.footer")
@stop
