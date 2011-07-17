<?php defined('SYSPATH') or die('No direct script access.');
return array(
	"project" => array(
		"label" => "Project:",
		"url"   => "",
		"buttons" => array(
			array(
				"label"  => "Overview",
				"url"    => "http://projetos.gartz.com.br/projects/curriculum",
				"target" => "_blank",
			),
			array(
				"label"  => "Roadmap",
				"url"    => "http://projetos.gartz.com.br/projects/curriculum/roadmap",
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
				"url"   => "/GabrielReitzGiannattasio-CV-Resume.pdf",
				"target" => "",
			)
		)
	)
);