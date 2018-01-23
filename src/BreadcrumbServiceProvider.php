<?php

namespace Mares29\Breadcrumb;


use Illuminate\Support\ServiceProvider;

/**
 * Class BreadcrumbServiceProvider
 *
 * @package Mares29\Breadcrumb
 */
class BreadcrumbServiceProvider extends ServiceProvider
{

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = FALSE;



	/**
	 * Perform post-registration booting of services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->app->singleton('breadcrumb', Breadcrumb::class);

		$this->loadViewsFrom(__DIR__ . '/views', 'breadcrumb');

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



	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [Breadcrumb::class];
	}
}