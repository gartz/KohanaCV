<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontpage extends Controller {

	/**
	 * @var boolean  execute default template
	 */
	protected $auto_template = TRUE;

	/**
	 * @var string  default template string
	 */
	protected $template;

	public function before()
	{
		// Exit if auto_template is disabled
		if( ! $this->auto_template) return;

		// Set the default template file
		$this->template = View::factory('html/dynamic/template')
			->set('content', NULL);
	}

	public function after()
	{
		// Exit if auto_template is disabled
		if( ! $this->auto_template) return;

		$this->response->body($this->template);
	}

	public function action_index()
	{
		// Load dynamic menu and static curriculum into template
		$this->template->set('content',View::factory('html/static/2011-1_curriculum_english_resume'));
		
	}

	public function action_printable()
	{
		// Load static curriculum into template
		$this->template->set('content',View::factory('html/static/2011-1_curriculum_english_resume'));
	}

} // End Frontpage
