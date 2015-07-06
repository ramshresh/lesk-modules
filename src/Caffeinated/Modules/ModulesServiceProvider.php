<?php
namespace Caffeinated\Modules;

use Illuminate\Support\ServiceProvider;

class ModulesServiceProvider extends ServiceProvider
{
	/**
	 * @var bool $defer Indicates if loading of the provider is deferred.
	 */
	protected $defer = true;

	/**
	 * Boot the service provider.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
			__DIR__.'/../../config/modules.php' => config_path('modules.php'),
		]);
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->mergeConfigFrom(
			__DIR__.'/../../config/modules.php', 'modules'
		);

		$this->app->register('Caffeinated\Modules\Providers\RepositoryServiceProvider');

		$this->app->register('Caffeinated\Modules\Providers\MigrationServiceProvider');

		$this->app->register('Caffeinated\Modules\Providers\ConsoleServiceProvider');

		$this->app->singleton('modules', function ($app) {
			$repository = $app->make('Caffeinated\Modules\Repositories\Interfaces\ModuleRepositoryInterface');

			return new \Caffeinated\Modules\Modules($app, $repository);
		});

		$this->app->booting(function ($app) {
			$app['modules']->register();
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return string
	 */
	public function provides()
	{
		return ['modules'];
	}
}
