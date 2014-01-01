<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contact extends Controller {



	public function action_index()
	{
		$view = View::factory('contact'); 
		$this->response->body($view);
	}

} // End Welcome
