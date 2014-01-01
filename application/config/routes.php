<?php defined('SYSPATH') or die('No direct script access.');


Route::set('works', 'work')->defaults(array(
		'controller' => 'works',
		'action'     => 'index'
	));

Route::set('work', 'work/<id>')->defaults(array(
		'controller' => 'works',
		'action'     => 'view'
	));

Route::set('about', 'about')->defaults(array(
		'controller' => 'about',
		'action'     => 'index'
	));

Route::set('running', 'running-from-camera')->defaults(array(
		'controller' => 'running',
		'action'     => 'index'
	));

Route::set('planet', 'planet-crooswijk')->defaults(array(
		'controller' => 'planet',
		'action'     => 'index'
	));

Route::set('contact', 'contact')->defaults(array(
		'controller' => 'contact',
		'action'     => 'index'
	));


Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'home',
		'action'     => 'index',
	));