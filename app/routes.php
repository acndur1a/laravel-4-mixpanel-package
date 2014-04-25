<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/mixpanel/track','MixpanelController@track');
Route::get('/mixpanel/register','MixpanelController@register');
Route::get('/mixpanel/identify','MixpanelController@identify');
Route::get('/mixpanel/people','MixpanelController@people');
