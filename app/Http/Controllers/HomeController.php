<?php namespace App\Http\Controllers;
use Carbon\Carbon;
use Miro\Mailman\Mailman;

class HomeController extends Controller {

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
        //container
        //$mailman = \App::make("mailman");
        //echo $mailman->getClassName() . "<br>";
        //facade(using namespace)
        //echo Mailman::getClassName() . "<br>";
        //facade /global
        //echo \Mailman::getClassName() . "<br>";
        //$mail = new Mail;
        //echo $mail->getClassName() . "<br>";
        //command
        //\Artisan::call("mailman") . "<br>";
        //echo \Mailman::getClassName();
        //$mailman = new \Miro\Mailman\Mailman;
        //$reflect = new \ReflectionClass($mailman);
        //dd($reflect->getMethods());
        //$email = "miroslav.trninic@gmail.com";
        //$mailman->send('emails.index',[],function($message) use($email){
            //$message->to($email)
                    //->subject("yuhuuuuu!!!");        
        //})->goBack();
        //return \App\Subs::all();
        //$date = Carbon::now()->toFormattedDateString();
        $post = \App\Post::orderBy("id","desc")->first();
        $news = \App\News::orderBy("id","desc")->limit(10)->get();
        $level = "";
        if($post){
            $level = $post->level ?: null;
        }
        return view('home.index',compact("post","level","news"));
        //return view('emails.subscribe')
            //->with("email_id",1);

	}
    public function contactForm()
    {
        return view("contact.contact");
    }

    public function contact(\Illuminate\Http\Request $request)
    {
        $this->validate($request,$this->getRules());
        $email = $request->get("email");
        $subject = $request->get("subject");
        $body = $request->get("body");
        $this->mailman->send('emails.contact',["email"=>$email,"subject"=>$subject,"body"=>$body],function($message){
            $message->to("miroslav.trninic@gmail.com")
                ->subject("Message from larabal.com");
        });


        return \Redirect::to("/home")
            ->with("message_success","Thanks, we will get back to you asap.");
    }
    public function getRules()
    {
        return [
            "email" => "required",
            "subject" => "required",
            "body" => "required"
        
        ];
    }
}
