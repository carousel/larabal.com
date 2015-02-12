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
        $data["user_id"] = \Auth::user()->id;
        \App\Article::create($data);
        return \Redirect::to("/");
	}

    public function articleTags()
    {
        return $tags = [
                "installation/configuration"=>"installation/configuration",
                "request/input/session" => "request/input/session",
                "security/auth" => "security/auth",
                "routing/controllers" => "routing/controllers",
                "errors/logging" => "errors/logging",
                "cache" => "cache",
                "events" => "events",
                "view/forms" => "view/forms",
                "laravel internals" => "laravel internals",
                "mail" => "mail",
                "validation" => "validation",
                "database/eloquent/migration" => "database/eloquent/migration",
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
        $article = \App\Article::find($id);
        return $article;
    }

}
