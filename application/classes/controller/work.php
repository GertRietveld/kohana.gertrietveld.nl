<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Work extends Controller {



	public function action_index()
	{
		$view = View::factory('work'); 
		$this->response->body($view);
	}

} // End Welcome
