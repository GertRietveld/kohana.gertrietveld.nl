<?php defined('SYSPATH') or die('No direct script access.');
/**************************************************************
 * Default Router
 **************************************************************/


Route::set('work', 'work(/<id>)')->defaults(array(
		'controller' => 'work',
		'action'     => 'index'
	));

Route::set('about', 'about')->defaults(array(
		'controller' => 'about',
		'action'     => 'index'
	));

Route::set('running', 'running_from_camera')->defaults(array(
		'controller' => 'running',
		'action'     => 'index'
	));

Route::set('planet', 'planet_crooswijk')->defaults(array(
		'controller' => 'planet',
		'action'     => 'index'
	));


Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'home',
		'action'     => 'index',
	));