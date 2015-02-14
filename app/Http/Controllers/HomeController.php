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
            ->with("news",$news);

	}

}
