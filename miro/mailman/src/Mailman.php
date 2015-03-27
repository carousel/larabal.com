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

        public function latestPost()
        {
            $post =  \App\Post::orderBy("id","DESC")->first();
            return $post;
        }


        public function goBack()
        {
            return \Redirect::to("/");
        }

        public function sendToSubs()
        {
            $subs = \App\Subs::all();
            $post = $this->latestPost();
            foreach($subs as $sub){
                $email = $sub->email;
                \Mail::send('admin.emails.content',["post"=>$post],function($message) use ( $email ){
                    $message->to($email)
                        ->subject("We have new post published on larabal.com");
                });
            }
            return \Redirect::to("/")
                ->with("message_success","Marketing email sent");

        }
    }
