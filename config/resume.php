<?php defined('SYSPATH') or die('No direct script access.');
return array(
	// Enable or disable application features, TRUE for enabled and FALSE for disabled.
	"features" => array(
		/* 
		* If you have Google analytics account, you can enable this feature, just don't forget to
		* update your view/features/google_analytics.php file, with your domain configurations.
		*/
		"google_analytics"         => TRUE,
		"google_analytics_account" => "UA-24619548-3", // Your account ID like: UA-24619548-1
		"google_analytics_domain"  => "gartz.com.br"        // See your configurations in google analytics website
	),
	"author" => "Gabriel Reitz Giannattasio",
	"last_update" => "2012/2",
	"informations" => array(
		"Marital status: Single",
		"Date of birth: 08/03/1986 – ".date_diff(date_create('1986-08-03'), date_create("now"))->format('%y yeas old'), //TODO: auto calculate years
		"Birthplace: Florianópolis - SC - Brazil",
		"Residence: Pantanal – Florianópolis - SC - Brazil",
		"Email/gtalk: gabriel@loadin.com.br",
		"Phone #: +55 (48) 8415-3555",
		"For knowledge, I'm available to travel, have good logic and easy assimilation.",
	),
	"about_me" => array(
		"text" => "“I'm looking for a fixer-upper with a solid foundation. Am willing to tear down walls, build bridges, and light fires. I have great experience, lots of energy, a bit of that 'vision thing' and I'm not afraid to start from the beginning.”",
		"author" => "- Steve Jobs",
	),
	"educations" => array(
		"Studying Analysis and Development – SENAI",
		"Acquire the second star in 5 Stars MSDN Developer certificate",
	),
	"languages" => array(
		"English (good speaking)",
		"Spanish (understand)",
		"Portuguese - Brazil (native)",
	),
	"experiences" => array(
		array(
			"company"     => "Cianet",
			"position"    => "Programmer",
			"year"        => "2011 - current",
			"description" => "Cianet is an industrial company that provides full-service solutions focused on internet, voice-over-ip, and tv streaming providers. My job is in the research and development sector, and am responsable for the Frontend of project IPTV, Helber (the project leader) has called me in the beggining to work on all development areas, like backend (shellscript, daemons, some C and C++ application customizes), middleware (python with django framework, running over nginx with push-stream support), and frontend, fully javascript focused in webkit from QT3 to 4, past a year I became leader of the frontend team, and responsable for software engeneer, analysys and team trainning. We work with most advanced features broth by HTML5, and even some drafts from W3C supported by webkit. We also use almost all features from ECMAScript. Our minifiers and other tasks are all using fully JS, supported by node.js in development enviroment. Our researchs are contributing with opensource community, we adopt, adapt and sometimes fixed (and push it back) projects from Github.com. It's a huge project maintained by a very experienced team.",
		),
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
	"knowhows" => array(
		"OS: Linux evangelist, BSD and OS X",
		"Programming Languages: PHP (Advanced), HTML5 (Advanced), Javascript (Advanced), CSS (Advanced), Ruby, Python, Perl, ASP, Java (Basic), C (Basic), C++ (Basic), and some other",
		"Good knowledge of Hardwares and Infrastructures",
		"Programmer since 13 years old",
		"I like VI and the new IDE's webapps, like Cloud9",
		"I'm not Windows friendly, it doesn't have threads, only process forks, is that realy an OS?!?",
		"Personal BLOG: <a href=\"http://gartz.com.br\">http://gartz.com.br</a>",
		"OpenSource projects: <a href=\"https://github.com/gartz\">https://github.com/gartz</a>",
		"Online CV - Resume: <a href=\"http://curriculum.gartz.com.br\">http://curriculum.gartz.com.br</a>",
	),
	"references" => array(
		"André Sá – <i>Dventure Group CEO</i> – +55 (48) 8827-7078",
		"Ricardo Fritsche – <i>Meritt CEO</i> – +55 (48) 8421-1133",
		"Carlos Aguiar – <i>Intuicom TI Manager</i> – +55 (48) 7811-5050",
		"Helber Guerra – <i>Cianet</i> – +55 (48) 9968-8297",
	),
);
