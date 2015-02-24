<?php namespace App\Http\Controllers;
use Carbon\Carbon;
use Miro\Mailman\Facades\Mailman;

class HomeController extends Controller {


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
        //command
        //\Artisan::call("mailman") . "<br>";
        //echo \Mailman::getClassName();
        //$mailman = new Mailman;
        //$email = "miroslav.trninic@gmail.com";
        //$mailman->send('emails.index',[],function($message) use($email){
            //$message->to($email)
                    //->subject("yuhuuuuu!!!");        
        //})->goBack();
        //return \App\Subs::all();
        //$date = Carbon::now()->toFormattedDateString();
        $article = \App\Article::orderBy("id","desc")->first();
        $news = \App\News::orderBy("id","desc")->limit(10)->get();
        $level = "";
        if($article){
            $level = $article->level ?: null;
        }
        return view('home.index',compact("article","level","news"));

	}
}
