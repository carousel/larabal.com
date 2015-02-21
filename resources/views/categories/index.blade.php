@extends("layouts.master")
@section("content")
    @if(count($categories) > 0)
        <h3>{!!count($categories) . " articles found in " . $tag . " category"!!}</h3>
    @else
        <lh3>no articles found in {!!$tag !!} category</h3>
    @endif
    @foreach($categories as $category)
            <span>Title:</span>
            <span>Published at:</span>
        <ul>
            <li class="category"><a href="#">{!!$category->title!!}</a>&nbsp;<span> {!!$category->created_at!!}</span></li>
        </ul>
        <table>
            <tr>
            </tr>
        </table>
    @endforeach
@stop
