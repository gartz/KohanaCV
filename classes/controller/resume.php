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

	//TODO: move this outside the controller
	protected function begin_with_last_name($name)
	{
		$name_array = explode(" ", $name);
		$name = array_pop($name_array).", ";
		$name .= implode(" ",$name_array);
		return $name;

	}

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
			->set('author', $this->begin_with_last_name(Kohana::config('resume.author')))
			->set('experiences', Kohana::config('resume.experiences'));
		
	}

	public function action_printable()
	{
		// Load static curriculum into content
		$this->content = View::factory('html/dynamic/resume')
			->set('author', $this->begin_with_last_name(Kohana::config('resume.author')))
			->set('experiences', Kohana::config('resume.experiences'));
	}

	public function action_name()
	{
		$this->auto_template = FALSE;
		$this->response->body(Kohana::config('resume.author'));
	}

} // End resume
