<?php namespace App\Http\Controllers;

class HomeController extends Controller {


	/**
	 * Show the application home screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{

        return view('home.index');

	}

}
