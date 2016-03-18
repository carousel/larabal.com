
    <div class="row filter-by">
        {!!Form::open(["url"=>"/search",""=>"","class"=>"form-inline"])!!}
            {!!Form::label("search_by_title")!!}&nbsp;
            {!!Form::text("search_by_title","",["class"=>"form-control"])!!}
            &nbsp;
            {!!Form::label("or_date_published")!!}&nbsp;
            {!!Form::select("or_date_published",["< week"=>"< week","< month"=>"< month","<  three months"=>"< three months"],"",["class"=>"form-control select"])!!}

            {!!Form::submit("Search",["class"=>"btn btn-success"])!!}
        {!!Form::close()!!}
    </div>
