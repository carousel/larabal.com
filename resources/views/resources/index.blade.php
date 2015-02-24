@extends("layouts.master")
@section("content")
    <div class="container">
        <div class="row">
            <br>
            <ul>
            @if(count($resources))
            <h3>Some links to Laravel related resources</h3>
            <br>
                @foreach($resources  as $resource)

                    <p>{!!$resource->description!!}</p>    
                    <li class="resource-url"><a href={!!$resource->url!!}>{!!$resource->url!!}</a></li>    
                    @if(Auth::check())
                    <span class="pull-right edit-link"><a href="/admin/resources/edit/{!!$resource->id!!}">Edit</a></span>
                    <span class="pull-right delete-link"><a href="/admin/resources/delete/{!!$resource->id!!}">Delete</a></span>

                    @endif
                    <br>
                @endforeach
                @else
                <h3>Please add some laravel resources</h3>
            @endif
            </ul>
        </div>
    </div>
@stop

