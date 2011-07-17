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

	/**
	 * @var string  template default content
	 */
	protected $content;

	public function before()
	{
		// Exit if auto_template is disabled
		if( ! $this->auto_template) return;

		// Set the default template file
		$this->template = View::factory('html/dynamic/template')
			->bind('content', $this->content);
	}

	public function after()
	{
		// Exit if auto_template is disabled
		if( ! $this->auto_template) return;

		$this->response->body($this->template);
	}

	public function action_index()
	{
		// Load menu
		$menu = View::factory('html/dynamic/menu')
			->set('options', array());
		// Add menu into content and load static curriculum
		$this->content = $menu.View::factory('html/static/2011-1_curriculum_english_resume');
		
	}

	public function action_printable()
	{
		// Load static curriculum into content
		$this->content = View::factory('html/static/2011-1_curriculum_english_resume');
	}

} // End Frontpage
