<?php namespace App\Http\Controllers;

class UserController extends Controller {

    public function getLogin()
    {
        return view("user.login");
    }

    public function subscribe(\Illuminate\Http\Request $request)
    {
        $email = \Request::get("email");
        $this->validate($request,$this->getRules());
        $this->validate($request,$this->emailUniqueRules());

        $subs = new \App\Subs;
        $subs->email = $email;
        $subs->save();

        $this->userSubscribe($email);
        return \Redirect::to("/")
            ->with("message_success","You are subscribed to our newsletter. Check your email.");
    }

    public function emailUniqueRules()
    {
        return ["email" => "unique:subs"];
    }

    //user subscribes
    public function userSubscribe($email)
    {
        $email_unsub = \App\Subs::where("email",$email)->first();
        $email_id = $email_unsub->id;
        \Mail::send('emails.subscribe',["email_id" => $email_id],function($message) use ( $email ){
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
    public function unsubscribe($id)
    {
        $email = \App\Subs::where("id",$id)->first();
        $email->delete();
        return \Redirect::to("/")
            ->with("message_success","You are unsubscribed from larabal.com newsletter.");

    }

}
