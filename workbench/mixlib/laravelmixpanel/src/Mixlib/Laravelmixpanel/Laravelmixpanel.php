<?php namespace Mixlib\Laravelmixpanel;
	
/*
|--------------------------------------------------------------------------
| Laravelmixpanel Package
|--------------------------------------------------------------------------
|
| Methods dependant on the mixpanel php api library that is autoloaded using
| composer.
|
*/
	use Mixpanel;
	
	class Laravelmixpanel
	{
		
		/**
		 * Track
		 * @param string token
		 * @param string property 
		 */		
		public static function track($token,$event)
		{
			$mp = Mixpanel::getInstance($token);
			$mp->track($event);
		}
		
		/**
		 * Register
		 * @param string token
		 * @param string event includes the name of the event to track
		 * @param string property includes the property name of the specific event created
		 */		
		public static function register($token,$event,$property)
		{
			$mp = Mixpanel::getInstance($token);
			$mp->register($event, $property);
		}
		
		/**
		 * Identify
		 * @param string token
		 * @param string event 
		 * @param string property 
		 */		
		public static function identify($token,$event,$property)
		{
			$mp = Mixpanel::getInstance($token);
			$mp->identify($property);
			$mp->track($event);
		}	
		
		/**
		 * People
		 * @param string token
		 * @param string userId 
		 * @param array options 
		 */		
		public static function people($token, $userId, $options = array())
		{
			$mp = Mixpanel::getInstance($token);
			$mp->people->set($userId, array(
				'$first_name'       => $options['firstName'],
				'$last_name'        => $options['lastName'],
				'$email'            => $options['email'],
			));			
		}
		
		
		
		
		
		
		
		
		
	}