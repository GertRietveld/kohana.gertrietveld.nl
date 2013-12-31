<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Running extends Controller {



	public function action_index()
	{
		$view = View::factory('running_from_camera'); 
		$this->response->body($view);
	}

} // End Welcome
