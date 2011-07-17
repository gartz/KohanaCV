<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontpage extends Controller {

	public function action_index()
	{
		// Load static curriculum into template
		$template = View::factory('html/dynamic/template')
			->set('content',View::factory('html/static/2011-1_curriculum_english_resume'));
		$this->response->body($template);
	}

} // End Frontpage
