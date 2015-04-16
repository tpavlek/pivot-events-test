<?php namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		Pivot::creating(function($event) {
            \Log::info("Creating pivot...");
        });
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
