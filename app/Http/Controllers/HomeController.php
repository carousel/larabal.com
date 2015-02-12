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
        return view('home.index')
            ->with("article",$article);

	}

}
