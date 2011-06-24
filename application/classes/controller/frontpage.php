<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontpage extends Controller {

	public function action_index()
	{
		
		$this->response->body(View::factory('html/static/2011-1_curriculum_english_resume'));
	}

} // End Frontpage
