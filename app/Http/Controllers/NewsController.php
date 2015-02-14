<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class NewsController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
        $this->middleware('auth');
	}


	public function getCreate()
	{
        return view("admin/news/create");
	}
	public function postCreate(Requests\CreateNewsRequest $request)
	{
        $data = $request->all();
        \App\News::create($data);
        return \Redirect::to("/");
	}

    public function getEdit($id)
    {
        $tags = $this->articleTags();
        $levels = $this->articleLevels();
        $article = \App\Article::find($id);
        if($article->user_id == \Auth::user()->id){
            return view("admin/articles/edit")
                ->with("article",$article)
                ->with("tags",$tags)
                ->with("levels",$levels);
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

}
