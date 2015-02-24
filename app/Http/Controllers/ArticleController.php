<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArticleController extends Controller {

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

        return view("admin/articles/create");
	}
	public function postCreate(Requests\CreateArticleRequest $request)
	{
        $data = $request->all();
        //$data["body"] = htmlspecialchars($data["body"]);
        $data["user_id"] = \Auth::user()->id;
        //dd($data["body"]);
        \App\Article::create($data);
        return \Redirect::to("/");
	}


    public function getEdit($id)
    {
        $article = \App\Article::find($id);
        if($article->user_id == \Auth::user()->id){
            return view("admin/articles/edit")
                ->with("article",$article);
        }else{
            return \Redirect::to("/")
                ->with("message","You are not authorized to edit this article");
        }
    }
    public function postEdit($id)
    {
        $data = \Request::all();
        $user_id = \Auth::user()->id;
        $article = \App\Article::where("id",$id)->first();
        $article->title = $data["title"];
        $article->tag = $data["tag"];
        $article->body = $data["body"];
        $article->level = $data["level"];
        $article->user_id = $user_id;
        $article->save();
        return \Redirect::to("/");

    }
    public function getDelete($id)
    {
        $article = \App\Article::where("id",$id)->first();
        if($article->user_id == \Auth::user()->id){
            $article->delete();
        }else{
            return \Redirect::to("/")
                ->with("message","You are not authorized to delete this article");
        }
            return \Redirect::to("/");
    }

    public function groupCategories($tag)
    {
        $categories = \App\Article::where("tag",$tag)->get();
        return view("categories.index")
            ->with("categories",$categories)
            ->with("tag",$tag);
    }
    public function show($id)
    {
        $article = \App\Article::where("id",$id)->first();
        return view("categories.show",compact("article"));
    }
    public function search(Request $request)
    {
        dd($request->all());
        
    }

}
