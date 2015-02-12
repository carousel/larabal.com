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
        $this->call('ArticleTableSeeder');
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

	}

}

class ArticleTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
        Article::truncate();
        Article::create([
            "title" => "New form request feature in Larvel 5",
            "body" => "Laravel 5.0 introduces Form Requests, which are a special type of class devoted to validating and authorizing form submissions.",
            "level" => "intermediate",
            "tag" => "request/input/session",
            "user_id" => "1"
        ]);

	}

}
