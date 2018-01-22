<?php

namespace Mares29\Breadcrumb;

use Illuminate\Support\ServiceProvider;
use Mares29\Breadcrumb\Facades\Breadcrumb;

class BreadcrumbServiceProvider extends ServiceProvider
{

	/**
	 * Perform post-registration booting of services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}



	/**
	 * Register any package services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton("breadcrumb", Breadcrumb::class);

		$this->loadViewsFrom(__DIR__ . '/views', 'breacrumb');

		$this->publishes([
			__DIR__ . '/views' => base_path('resources/views/vendor/breadcrumb')
		]);
	}
}