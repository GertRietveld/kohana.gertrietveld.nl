<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Work extends Controller {

	// public function action_index()
	// {
	// 	$view = View::factory('work'); 
	// 	$this->response->body($view);
	// }

	public function action_index() {
        $works = ORM::factory('Work')->find_all(); // loads all article object from table
         
        $view = new View('work');
        $view->set("works", $works); // set "articles" object to view
         
        $this->response->body($view);
    }

} // End Welcome
