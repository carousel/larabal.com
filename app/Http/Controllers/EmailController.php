<?php namespace App\Http\Controllers;
use Carbon\Carbon;
use Miro\Mailman\Facades\Mailman;
use Miro\Mailman\Mailman as Mail;

class EmailController extends Controller {


	/**
	 * Show the application home screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
        return view("admin.emails.create");
	}
}
