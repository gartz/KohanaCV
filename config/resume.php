<?php defined('SYSPATH') or die('No direct script access.');
return array(
	// Enable or disable application features, TRUE for enabled and FALSE for disabled.
	"features" => array(
		/* 
		* If you have Google analytics account, you can enable this feature, just don't forget to
		* update your view/features/google_analytics.php file, with your domain configurations.
		*/
		"google_analytics"         => TRUE,
		"google_analytics_account" => "UA-24619548-1", // Your account ID like: UA-24619548-1
		"google_analytics_domain"  => ".com.br"        // See your configurations in google analytics website
	),
	"author" => "Gabriel Reitz Giannattasio",
	"informations" => array(
		"Marital status: Single",
		"Date of birth: 08/03/1986 – ".date_diff(date_create('1986-08-03'), date_create("now"))->format('%y yeas old'), //TODO: auto calculate years
		"Birthplace: Florianópolis - SC - Brazil",
		"Residence: Pantanal – Florianópolis - SC - Brazil",
		"Email/gtalk: gabriel@loadin.com.br",
		"Phone #: +55 (48) 8415-3555",
		"For knowledge, I'm available to travel, have good logic and easy assimilation.",
	),
	"experiences" => array(
		array(
			"company"     => "Fleep.me",
			"position"    => "System Annalist",
			"year"        => "2011",
			"description" => "PHP social network project, arquitect the project and work on implementation. This project I have chose Kohana Framework 3.1 with HMVC, with focus on TDD to work with rolling releases using CI for ensure the project quality and distributed servers. Maintained and implemented the development server and produticion server and it patterns, integrated VPN (development restricted access for the production server), GIT (for SCM), Redmine (project management) and Hudson (CI).",
		),
		array(
			"company"     => "Intuicom",
			"position"    => "Programmer",
			"year"        => "2010 - 2011",
			"description" => "PHP Programmer, focus on hotsites using a proprietary framework and Wordpress as CMS. I made some projects with HTML5, Flex and help on implementing SCRUM methodology. I have installed the project manager (redmine) and customized it for the company porpoises, then integrated it with GIT for projects version control. Redesigned the development webserver to work with internal DNS and individual process for each programmer user.",
		),
		array(
			"company"     => "Grupos Internet",
			"position"    => "Programmer",
			"year"        => "2010",
			"description" => "PHP 5 with proprietary framework, much like Zend Framework, with a Python SOAP layer. I worked in front-ent with Flex 3 and 4. Javascript usign Prototype and Jquery frameworks.",
		),
		array(
			"company"     => "Todo!BPO",
			"position"    => "Analysis Programmer",
			"year"        => "2009 - 2010",
			"description" => "Application analyses, UML documentation development and support application (ASP, VB6, VB.NET, ASP.NET and C#), experience and training with MSSQL (2000 to 2008), worked with high loaded applications.",
		),
		array(
			"company"     => "CodeGate",
			"position"    => "System Annalist",
			"year"        => "2008 - 2009",
			"description" => "Startup company from ADM Group, focus on maintenance of a ASP ERP. I have been promoted from programmer to system annalist when the startup begun.",
		),
		array(
			"company"     => "ADM Distribuição e Logística",
			"position"    => "Programmer",
			"year"        => "2008",
			"description" => "Work with analyses, installation/configuration of Windows server, ActiveDomain, bug fix, support and new implementations.",
		),
	),
);