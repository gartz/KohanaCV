<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Resume extends Controller {

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
			->set('style', View::factory('html/static/style'))
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
			->set('groups', Kohana::config('menu'));
		// Add menu into content and load static curriculum
		$this->content = $menu.View::factory('html/dynamic/resume')
			->set('full_name', Kohana::config('resume.last_name').', '.Kohana::config('resume.first_name').' '.Kohana::config('resume.midle_name'))
			->set('experiences', Kohana::config('resume.experiences'));
		
	}

	public function action_printable()
	{
		// Load static curriculum into content
		$this->content = View::factory('html/dynamic/resume')
			->set('full_name', Kohana::config('resume.last_name').', '.Kohana::config('resume.first_name').' '.Kohana::config('resume.midle_name'))
			->set('experiences', Kohana::config('resume.experiences'));
	}

} // End resume
