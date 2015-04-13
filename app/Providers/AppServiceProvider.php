<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

    public function levels()
    {
        return $levels = [
            "beginner"     => "beginner",
            "intermediate" => "intermediate",
            "advanced"     => "advanced"
        ];
    }

    public function tags()
    {
        return $tags = [
                "installation configuration"=>"installation configuration",
                "request input session" => "request input session",
                "security auth" => "security auth",
                "routing controllers" => "routing controllers",
                "errors logging" => "errors logging",
                "cache" => "cache",
                "events" => "events",
                "view forms" => "view forms",
                "mail" => "mail",
                "validation" => "validation",
                "database eloquent migration" => "database eloquent migration",
                "artisan cli" => "artisan cli",
                "front end" => "front end",
                "laravel internals" => "laravel internals",
                "testing" => "testing",
                "general PHP"=>"general PHP",
                "general development"=>"general development",
                "other"=>"other"
            ];
        
    }
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        view()->share("tags",$this->tags());
        view()->share("levels",$this->levels());
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar'
		);
	}

}
