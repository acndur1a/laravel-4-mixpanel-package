<?php namespace Mixlib\Laravelmixpanel;

use Illuminate\Support\ServiceProvider;

class LaravelmixpanelServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
	  $this->package('Mixlib/Laravelmixpanel');
	}	
	
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
	  $this->app['Laravelmixpanel'] = $this->app->share(function($app)
	  {
		return new Laravelmixpanel;
	  });
	  
	  $this->app->booting(function()
	  {
		$loader = \Illuminate\Foundation\AliasLoader::getInstance();
		$loader->alias('Laravelmixpanel', 'Mixlib\Laravelmixpanel\Facades\Laravelmixpanel');
	  });	  
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('Laravelmixpanel');
	}

}
