<?php namespace App\Http\Controllers;
use Carbon\Carbon;

class HomeController extends Controller {


	/**
	 * Show the application home screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
        //return \App\Subs::all();
        $date = Carbon::now()->toFormattedDateString();
        $article = \App\Article::orderBy("id","desc")->first();
        $news = \App\News::orderBy("id","desc")->limit(10)->get();
        if($article){
            $level = $article->level ?:null;
        }
        $level = "";
        return view('home.index')
            ->with("article",$article)
            ->with("level",$level)
            ->with("news",$news)
            ->with("tags",$this->articleTags());

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

}
