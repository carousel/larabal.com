<?php namespace Miro\Mailman;

    /**
    * 
    **/
    class Mailman {
        
        public function send($view,$message = [],$callback)
        {
            \Mail::send($view,$message,$callback);        
            return $this;
        }
        public function getClassName()
        {
            return get_class($this);
        }
        public function goBack()
        {
            return \Redirect::to("/");
        }
    }
