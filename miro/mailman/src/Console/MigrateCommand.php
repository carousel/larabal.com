<?php namespace Miro\Mailman\Console;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class MigrateCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'mailman:migrate';

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
        $this->call("make:migration",["name"=>"create_mailman_table"]);
        //\Artisan::call("migrate");
	}

}
