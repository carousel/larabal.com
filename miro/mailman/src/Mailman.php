<?php namespace Miro\Mailman;

    /**
    * 
    **/
    class Mailman {
        
        public function subscribe($view,$message = [],$callback)
        {
            \Mail::send($view,$message,$callback);        
            return $this;
        }
        public function send($view,$message = [],$callback)
        {
            \Mail::send($view,$message,$callback);        
            return $this;
        }

        public function content()
        {
            $article =  \App\Article::orderBy("id","ASC")->first();
            return $article->title;
        }


        public function goBack()
        {
            return \Redirect::to("/");
        }

        public function sendToSubs()
        {
            $subs = \App\Subs::all();
            $title = $this->content();
            foreach($subs as $sub){
                echo $sub->email . $title;
            }
            $message = "New article published on larabal.com";
            $subject = "New article published on larabal.com - " . $title;
            dd($subject . PHP_EOL);
        //\Mail::send('emails.sendtosubs',[],function($message) use ( $email ){
            //$message->to($email)
                //->subject("New article published on larabal.com");
        //});
        }
    }
