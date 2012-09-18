	<?php defined('SYSPATH') or die('No direct script access.'); ?>

	<h1><p class="P5"><span class="T1"><?=$author?></span></p></h1><p class="Subtitle"><?=$last_update?></p>
	<?php if(isset($informations)) { ?>
	<h2 class="Heading_20_1"><a id="a__Personal_Information"><span/></a><span class="T1">Personal Information</span></h2>
	<ul>
		<?php foreach($informations as $info) { ?>
		<li><span class="T2"><?=$info?></span></li>
		<?php } // end foreach informations ?>
	</ul>
	<?php } // end informations ?>
	<br>
	<?php if(isset($about_me)) { ?>
	<p class="P4"><span class="T1"><?=$about_me['text']?></span></p><p class="P2"><?=$about_me['author']?></p>
<?php } // end about_me ?>
<?php if(isset($educations)) { ?>
<h2 class="Heading_20_1"><a id="a__Education_and_Training"><span/></a><span class="T1">Education and Training</span></h2>
<ul>
	<?php foreach($educations as $education) { ?>
	<li><span class="T2"><?=$education?></span></li>
	<?php } // end foreach educations?>
</ul>
<?php } // end educations ?>
<?php if(isset($languages)) { ?>
<h2 class="Heading_20_1"><a id="a__Language_Skills"><span/></a><span class="T1">Language Skills</span></h2>
<ul>
	<?php foreach($languages as $lang) { ?>
	<li><span class="T2"><?=$lang?></span></li>
	<?php } // end foreach languagess?>
</ul>
<?php } // end languages ?>
<?php if(isset($experiences)) { ?>
	<h2 class="Heading_20_1"><a id="a__Work_Experience"><span/></a><span class="T1">Work Experience</span></h2>
	<?php foreach($experiences as $experience) { ?>
		<ul><li style="list-style: disc outside none; margin-left:1.27cm;"><span class="T4"><?=$experience['company']?> (<?=$experience['position']?> – <?=$experience['year']?>)</span><p class="P3"><span class="T2"><?=$experience['description']?></span></p></li></ul>
	<?php } // end foreach experiences ?>
<?php } // end experiences ?>
<?php if(isset($knowhows)) { ?>
<h2 class="Heading_20_1"><a id="a__Technology_Knowhow_and_Experience"><span/></a><span class="T1">Technology Knowhow and Experience</span></h2>
<ul>
	<?php foreach($knowhows as $knowhow) { ?>
	<li><span class="T2"><?=$knowhow?>;</span></li>
	<?php } // end foreach knowhows ?>
</ul>
<?php } // end knowhows ?>
<?php if(isset($references)) { ?>
<h2 class="Heading_20_1"><a id="a__Personal_References"><span/></a><span class="T1">Personal References</span></h2>
<ul>
	<?php foreach($references as $ref) { ?>
	<li><span class="T2"><?=$ref?></span></li>
	<?php } // end foreach references ?>
</ul>
<?php } // end references ?>
