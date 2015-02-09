@extends("layouts.admin")

@section("css")
  <link href="/css/BootSideMenu.css" rel="stylesheet">
@stop

@section("content")



  <!--Test 2 -->
  <div id="test2">
    <div class="list-group">
      <a href="/articles/create" class="list-group-item active">Write Article</a>
      <a href="#" class="list-group-item">Add News</a>
      <a href="#" class="list-group-item">Add Resource</a>
      <a href="#" class="list-group-item">Add User</a>
    </div>

  </div>
  <!--/Test 2-->


  <!--Normale contenuto di pagina-->
  <div class="container">
    

    

  </div>
  <!--Normale contenuto di pagina-->


@stop

@section("js")
  <script src="/js/BootSideMenu.js"></script>
  <script type="text/javascript">
    $('#test').BootSideMenu({side:"left", autoClose:false});
    $('#test2').BootSideMenu({side:"right"});
  </script>
@stop
