<?php

namespace Mares29\Breadcrumb;


use Illuminate\Support\ServiceProvider;
use Mares29\Breadcrumb\Facades\BreadcrumbFacade;

class BreadcrumbServiceProvider extends ServiceProvider
{

	/**
	 * Perform post-registration booting of services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->app->singleton(Breadcrumb::class, BreadcrumbFacade::class);

		$this->loadViewsFrom(__DIR__ . '/views', 'breacrumb');

		$this->publishes([
			__DIR__ . '/views' => base_path('resources/views/vendor/breadcrumb'),
		]);
	}



	/**
	 * Register any package services.
	 *
	 * @return void
	 */
	public function register()
	{
	}
}