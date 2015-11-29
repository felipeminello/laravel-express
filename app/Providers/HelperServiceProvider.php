<?php

namespace App\Providers;


use App\Helpers\DateHelper;
use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{

	public function boot()
	{
		//
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('DateHelper', function()
		{
			return new DateHelper;
		});
	}
}