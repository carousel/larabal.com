@extends("layouts.master")
@section("content")
<div class="container">
    <div class="row filter-by">
        {!!Form::open(["url"=>"/search",""=>"","class"=>"form-inline"])!!}
            {!!Form::label("search_by_title")!!}&nbsp;
            {!!Form::text("search_by_title","",["class"=>"form-control"])!!}
            &nbsp;
            {!!Form::label("or_date_published")!!}&nbsp;
            {!!Form::select("or_date_published",["< week"=>"< week","< month"=>"< month","< three months"=>"< three months"],"",["class"=>"form-control select"])!!}

            {!!Form::submit("Search",["class"=>"btn btn-success"])!!}
        {!!Form::close()!!}
    </div>
        @if(count($results) > 0)
            @if(count($results) == 1)
                <h3>{!!count($results) . " article found "!!}</h3>
            @endif
            @if(count($results) > 1)
                <h3>{!!count($results) . " articles found in "!!}</h3>
            @endif
            <div class="row">
                <br>
            </div>        
            <table>
                <tr>
                    <th>Title</th>
                    <th>Published</th>
                </tr>
                @foreach($results as $result )
                <tr>
                    <td><a href="/category/show/{!!$result->id!!}">{!!$result->title!!}</a></td>
                    <td>{!!$result->created_at->toFormattedDateString()!!}</td>
                </tr>
                @endforeach

            </table>
        @else
        <h3>No articles found in</h3>
        @endif
    </div>
@endsection
@section("footer")
    @include("layouts.footer")
@stop
