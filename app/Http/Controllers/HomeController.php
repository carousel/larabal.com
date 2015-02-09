<?php namespace App\Http\Controllers;

class HomeController extends Controller {


	/**
	 * Show the application home screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
        $articles = [
            "title" => "First article title",
            "body" => "Curabitur a orci velit. Donec eu lacus aliquam, tincidunt leo vel, tincidunt dolor. Quisque vel tristique justo. Pellentesque ac interdum mauris. Aliquam auctor tellus non neque finibus, et mollis purus fermentum. Nunc ut leo viverra, imperdiet mauris vitae, egestas lorem. Sed vel semper neque. Fusce rhoncus, ligula et venenatis vestibulum, nisl lectus ornare neque, in dignissim ante diam vitae magna. Nullam condimentum eleifend ipsum, sed pretium erat pellentesque posuere."
        ];
        return view('home.index')
            ->with("articles",$articles);

	}

}
