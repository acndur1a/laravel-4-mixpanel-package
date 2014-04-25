laravel-4-mixpanel-package
==========================

Package for Laravel 4.1 to use with Mixpanel

<h2> Introduction</h2>

<p> This is a package created for use with Mixpanel API, it uses the <a href="https://github.com/mixpanel/mixpanel-php">Mixpanel PHP Library </a> as a dependency  </p> 
<p> The package is located in /workbench folder in the root directory </p>

<h2> Package </h2>

<p> The package is located in /workbench/ folder in the root directory </p>
<p> To access the service provider, facades and package file, go to workbench/ixlib/laravelmixpanel/src/Mixlib/Laravelmixpanel
</p>



<h2> Controller Examples </h2>

<h4> In your /app you can use the following controller examples to interact with Laravelmixpanel::</h4>

			
		/**
		 * Track method example
		 *
		 */		
		function track()
		{
			$property = "my home page";
			// get the mixpanel project token from your mixpanel account
			$mixpanel_project_token = "TOKEN_ID";
			$mix = Laravelmixpanel::track($mixpanel_project_token,$property);
			// load a simple view page if needed
			return View::make('mixpanel')->with('mixer',$mix);	
		}
		
		/**
		 * Register method example
		 *
		 * Used to register an event to a property
		 */		
		function register()
		{
			$event = "ad source";
			$property = "google";
			// get the mixpanel project token from your mixpanel account
			$mixpanel_project_token = "TOKEN_ID";
			$mix = Laravelmixpanel::register($mixpanel_project_token,$event, $property);
			// load a simple view page if needed
			return View::make('mixpanel')->with('mixer',$mix);	
		}	
		
		/**
		 * Identify method example
		 *
		 * Used to identify current request
		 */				
		function identify()
		{
			$property = "my home page";
			$event = 'clicked button';
			// get the mixpanel project token from your mixpanel account
			$mixpanel_project_token = "TOKEN_ID";
			$mix = Laravelmixpanel::identify($mixpanel_project_token,$event,$property);
			// load a simple view page if needed
			return View::make('mixpanel')->with('mixer',$mix);	
		}
		
		/**
		 * People method example
		 *
		 * Used to create a new people object in mixpanel
		 */		
		
		function people()
		{
			$property = "my home page";
			$userId = 12345; // the user id you would like to update
			$options['firstName'] =  'John';
			$options['lastName'] = 'Smith';
			$options['email'] = 'smith@mail.com';
			// get the mixpanel project token from your mixpanel account
			$mixpanel_project_token = "TOKEN_ID";
			$mix = Laravelmixpanel::people($mixpanel_project_token, $userId, $options);
			// load a simple view page if needed
			return View::make('mixpanel')->with('mixer',$mix);	
		}
