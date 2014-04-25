<?php 

	class MixpanelController extends Controller{
		
		/**
		 * Track method example
		 *
		 */		
		function track()
		{
			$property = "my home page";
			// get the mixpanel project token from your mixpanel account
			$mixpanel_project_token = "d2419974062567366b1715cdc42c415e";
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
			$mixpanel_project_token = "d2419974062567366b1715cdc42c415e";
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
			$mixpanel_project_token = "d2419974062567366b1715cdc42c415e";
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
			$mixpanel_project_token = "d2419974062567366b1715cdc42c415e";
			$mix = Laravelmixpanel::people($mixpanel_project_token, $userId, $options);
			// load a simple view page if needed
			return View::make('mixpanel')->with('mixer',$mix);	
		}
		
		
		
		
	}