<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Planet extends Controller {


	public function action_index()
	{
		$view = View::factory('planet_crooswijk'); 
		$this->response->body($view);
	}

} // End Welcome
