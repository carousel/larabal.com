<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class TableTruncate extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'table:truncate';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Truncate a table';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$table = $this->argument("table");
        \DB::table($table)->truncate();
        $message = "Table " . $table . " truncated";
        $this->info($message);

	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [
			['table', InputArgument::REQUIRED, 'Table name'],
		];
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return [
			['table', null, InputOption::VALUE_OPTIONAL, 'Table name', null],
		];
	}

}
