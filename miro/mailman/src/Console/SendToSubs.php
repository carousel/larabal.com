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
        $this->info("Sending post to subscribers");
        $mailman = new Mailman;
        $mailman->sendToSubs();
        $this->info("Post has been sent to subscribers");
	}

}
