<?php namespace Miro\Mailman;
use Illuminate\Support\ServiceProvider;
use Miro\Mailman\Mailman;

class MailmanServiceProvider extends ServiceProvider {

        public function register()
        {
            $this->app->bind("mailman",function(){
                
                return new Mailman;         
            });
        }
    }
