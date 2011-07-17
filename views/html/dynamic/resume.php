<?php defined('SYSPATH') or die('No direct script access.'); ?>

<h1><p class="P5"><span class="T1"><?=$author?></span></p></h1><p class="Subtitle">2011/2</p>
<?php if(isset($informations)) { ?>
<h2 class="Heading_20_1"><a id="a__Personal_Information"><span/></a><span class="T1">Personal Information</span></h2>
<ul>
	<?php foreach($informations as $info) { ?>
	<li><span class="T2"><?=$info?></span></li>
	<?php } // end foreach informations ?>
</ul>
<?php } // end informations ?>
<span class="T2"/></p><br><p class="P4"><span class="T1">“I'm looking for a fixer-upper with a solid foundation. Am willing to tear down walls, build bridges, and light fires. I have great experience, lots of energy, a bit of that 'vision thing' and I'm not afraid to start from the beginning.”</span></p><p class="P2">- Steve Jobs</p>
<h2 class="Heading_20_1"><a id="a__Education_and_Training"><span/></a><span class="T1">Education and Training</span></h2>
<ul>
	<li><span class="T2">Studying Analysis and Development – SENAI</span></li>
	<li><span class="T2">Acquire the second star in 5 Stars MSDN Developer certificate</span></li>
</ul>
<h2 class="Heading_20_1"><a id="a__Language_Skills"><span/></a><span class="T1">Language Skills</span></h2>
<ul>
	<li><span class="T2">English (good speaking)</span></li>
	<li><span class="T2">Spanish (understand)</span></li>
	<li><span class="T2">Portuguese - Brazil (native)</span></li>
</ul>
<?php if(isset($experiences)) { ?>
	<h2 class="Heading_20_1"><a id="a__Work_Experience"><span/></a><span class="T1">Work Experience</span></h2>
	<?php foreach($experiences as $experience) { ?>
		<ul><li style="list-style: disc outside none; margin-left:1.27cm;"><span class="T4"><?=$experience['company']?> (<?=$experience['position']?> – <?=$experience['year']?>)</span><p class="P3"><span class="T2"><?=$experience['description']?></span></p></li></ul>
	<?php } // end foreach experiences ?>
<?php } // end experiences ?>
<h2 class="Heading_20_1"><a id="a__Technology_Knowhow_and_Experience"><span/></a><span class="T1">Technology Knowhow and Experience</span></h2>
<ul>
	<li><span class="T2">Servers: Linux, BSD, Windows and OS X;</span></li>
	<li><span class="T2">Programming Languages: PHP (Advanced), HTML (Advanced), Javascript (Advanced), CSS (Advanced), Ruby, Python, Perl, ASP, Java (Basic), C (Basic), C++ (Basic), and some other;</span></li>
	<li><span class="T2">Good knowledge of Hardwares and Infrastructures;</span></li>
	<li><span class="T2">Personal project manager: </span><a href="http://projetos.gartz.com.br/"><span class="Internet_20_link"><span class="T2">http://projetos.gartz.com.br</span></span></a></li>
	<li><span class="T2">OpenSource projects: </span><a href="https://github.com/gartz"><span class="Internet_20_link"><span class="T2">https://github.com/gartz</span></span></a></li>
	<li><span class="T2">Online CV - Resume: </span><a href="http://curriculum.gartz.com.br"><span class="Internet_20_link"><span class="T2">http://curriculum.gartz.com.br/</span></span></a></li>
</ul>
<h2 class="Heading_20_1"><a id="a__Personal_References"><span/></a><span class="T1">Personal References</span></h2>
<ul>
	<li><span class="T2">André Sá – </span><span class="T5">Dventure Group CEO </span><span class="T2">– +55 (48) 8827-7078 </span></li>
	<li><span class="T2">Ricardo Fritsche – </span><span class="T3">Meritt CEO</span><span class="T2"> – +55 (48) 8421-1133 </span></li>
	<li><span class="T2">Carlos Aguiar – </span><span class="T3">Intuicom TI Manager</span><span class="T2"> – +55 (48) 7811-5050</span></li>
</ul>