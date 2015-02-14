<?php namespace App\Http\Controllers;

class UserController extends Controller {

    public function getLogin()
    {
        return view("user.login");
    }

    public function subscribe(\Illuminate\Http\Request $request)
    {
        $this->validate($request,$this->getRules());
        $email = \Request::get("email");
        $this->userSubscribe($email);
        return \Redirect::to("/")
            ->with("message","You are subscribed to our newsletter. Check your email.");
    }

    //user subscribes
    public function userSubscribe($email)
    {
        \Mail::send('emails.subscribe',[],function($message) use ( $email ){
            $message->to($email)
                ->subject("larabal.com subscription");
        });
        
    }
    public function addToListOfSubscibers()
    {
        //todo - event?
    }
    public function sendNewsletter()
    {
        //todo
    }

    public function getRules()
    {
        return ["email" => "required"];
    }

}
