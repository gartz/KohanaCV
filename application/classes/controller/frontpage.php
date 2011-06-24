<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontpage extends Controller {

	public function action_index()
	{
		$this->response->body('hello, gartz!');
	}

} // End Frontpage
