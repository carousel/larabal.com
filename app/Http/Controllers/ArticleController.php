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
        $this->middleware('auth');
	}


	public function getCreate()
	{
        $tags = $this->articleTags();
        $levels = $this->articleLevels();

        return view("admin/articles/create")
              ->with("tags",$tags)
              ->with("levels",$levels);
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

    public function articleTags()
    {
        return $tags = [
                "installation-configuration"=>"installation-configuration",
                "request-input-session" => "request-input-session",
                "security-auth" => "security-auth",
                "routing-controllers" => "routing-controllers",
                "errors-logging" => "errors-logging",
                "cache" => "cache",
                "events" => "events",
                "view-forms" => "view-forms",
                "laravel internals" => "laravel internals",
                "mail" => "mail",
                "validation" => "validation",
                "database-eloquent-migration" => "database-eloquent-migration",
                "artisan cli" => "artisan cli",
                "front end" => "front end",
                "general PHP"=>"general PHP",
                "general development"=>"general development"
            ];
        
    }

    public function articleLevels()
    {
        return $levels = [
            "beginner" => "beginner",
            "intermediate" => "intermediate",
            "advanced" => "advanced"
        ];
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
    public function getCategory($tag)
    {
        return $tag;
    }

}
