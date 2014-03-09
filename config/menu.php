<?php defined('SYSPATH') or die('No direct script access.');
return array(
	"project" => array(
		"label" => "Project:",
		"url"   => "",
		"buttons" => array(
			array(
				"label"  => "Personal Blog",
				"url"    => "http://gartz.com.br",
				"target" => "_blank",
			),
			array(
				"label"  => "Source Code",
				"url"    => "https://github.com/gartz/KohanaCV",
				"target" => "_blank",
			),
		)
	),
	"tools" => array(
		"label" => "File:",
		"url"   => "",
		"buttons" => array(
			array(
				"label" => "Print",
				"url"   => "javascript: print();",
				"target" => "",
			)
		)
	),
	"export" => array(
		"label" => "Export as:",
		"url"   => "",
		"buttons" => array(
			array(
				"label" => "PDF",
				"url"   => Kohana::$base_url.preg_replace('/\s+/', '', Kohana::config('resume.author')).'-CV.pdf',
				"target" => "",
			)
		)
	)
);
