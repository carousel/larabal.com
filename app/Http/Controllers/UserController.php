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
        $this->sendMail($email);
        return \Redirect::to("/")
            ->with("message","You are subscribed to our newsletter. Check your email.");
    }

    public function sendMail($email)
    {
        \Mail::send('emails.subscribe',[],function($message) use ( $email ){
            $message->to($email)
                ->subject("larabal.com subscription");
        });
        
    }

    public function getRules()
    {
        return ["email" => "required"];
    }

}
