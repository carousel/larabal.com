<?php namespace Miro\Mailman\Console;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class MailmanCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'mailman';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Run mailman commands';

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{
        echo "This is mailman command handler" . PHP_EOL;
		//$this->comment(PHP_EOL.Inspiring::quote().PHP_EOL);
	}

}
