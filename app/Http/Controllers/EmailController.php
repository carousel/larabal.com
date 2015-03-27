<?php namespace App\Http\Controllers;
use Carbon\Carbon;
use Miro\Mailman\Mailman;

class EmailController extends Controller {

	public function __construct(Mailman $mailman)
	{
        $this->mailman = $mailman;
	}


	/**
	 * Show the application home screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
        return view("admin.emails.index");
	}

    public function sendToSubs()
    {
        $this->mailman->sendToSubs();
        return \Redirect::to("/")
            ->with("message_success","Post sent to subscribers");
        
    }
}
