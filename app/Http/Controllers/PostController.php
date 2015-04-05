<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PostController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
        $this->middleware('auth',['except' => ["groupCategories","show","search"]]);
	}


	public function getCreate()
	{

        return view("admin/post/create");
	}
	public function postCreate(Requests\CreatePostRequest $request)
	{
        $data = $request->all();
        $data["user_id"] = \Auth::user()->id;
        \App\Post::create($data);
        return \Redirect::to("/");
	}


    public function getEdit($id)
    {
        $post = \App\Post::find($id);
        if($post->user_id == \Auth::user()->id || \Auth::user()->role == "admin+"){
            return view("admin/post/edit")
                ->with("post",$post);
        }else{
            return \Redirect::to("/")
                ->with("message","You are not authorized to edit this post");
        }
    }
    public function postEdit($id)
    {
        $data = \Request::all();
        $user_id = \Auth::user()->id;
        $post = \App\Post::where("id",$id)->first();
        $post->title = $data["title"];
        $post->tag = $data["tag"];
        $post->body = $data["body"];
        $post->level = $data["level"];
        $post->user_id = $user_id;
        $post->save();
        return \Redirect::to("/");

    }
    public function getDelete($id)
    {
        $post = \App\Post::where("id",$id)->first();
        if($post->user_id == \Auth::user()->id){
            $post->delete();
        }else{
            return \Redirect::to("/")
                ->with("message","You are not authorized to delete this post");
        }
            return \Redirect::to("/");
    }

    public function groupCategories($tag)
    {
        $categories = \App\Post::where("tag",$tag)->get();
        return view("categories.index")
            ->with("categories",$categories)
            ->with("tag",$tag);
    }
    public function show($id)
    {
        $post = \App\Post::where("id",$id)->first();
        return view("categories.show",compact("post"));
    }


    public function search(Requests\SearchRequest $request)
    {
        if($request->get("search_by_title")){
            $results = \App\Post::where("title",$request->get("search_by_title"))->get();
            if(is_null($results)){
                return \Redirect::back()
                    ->with("search_error","Sorry, your search doesn't match any result. Please try again");
            }else{
                return view("categories.search")
                        ->with("results",$results);            
            }
        }else{
            $input = $request->get("or_date_published");
            if($input == "< week"){
                $carbon = \Carbon\Carbon::now()->subWeek();
                $results = \App\Post::where("created_at",">=",$carbon)->get();
                return view("categories.search")
                    ->with("results",$results);
            };
            if($input == "< month"){
                $carbon = \Carbon\Carbon::now()->subMonth();
                $results = \App\Post::where("created_at",">=",$carbon)->get();
                return view("categories.search")
                    ->with("results",$results);
            };
            
            if($input == "< three months"){
                $carbon = \Carbon\Carbon::now()->subMonths(3);
                $results = \App\Post::where("created_at",">=",$carbon)->get();
                return view("categories.search")
                    ->with("results",$results);
            };

        }
        
    }

}
