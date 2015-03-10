<?php namespace Miro\Mailman\Console;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Miro\Mailman\Mailman;

class SendToSubs extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'mailman:sendtosubs';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Run mailman:migrate commands';

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{
        //$subs = \App\Subs::all();
        //foreach($subs as $sub){
            //$this->info($sub->email . "\n");
        //}
        $mailman = new Mailman;
        $mailman->sendArticleToSubs();
        //$this->call("make:migration",["name"=>"create_mailman_table"]);
        //\Artisan::call("migrate");
	}

}
