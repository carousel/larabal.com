<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Article;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

        $this->call('UserTableSeeder');
	}

}
class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
        User::truncate();
        User::create([
            "name" => "Miroslav",
            "email" => "miroslav.trninic@gmail.com",
            "password" => Hash::make("bumerang"),
            "role" => "admin+",
        ]);
        User::create([
            "name" => "Milan",
            "email" => "milan.poznanovic@gmail.com",
            "password" => Hash::make("poznanovic"),
            "role" => "admin",
        ]);

	}

}

