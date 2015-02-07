<?php namespace App\Http\Controllers;

class HomeController extends Controller {


	/**
	 * Show the application home screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $articles = [];
        $tags = ["hello"];
        return view('home.index')
            ->with("articles",$articles)
            ->with("tags",$tags);

	}

}
