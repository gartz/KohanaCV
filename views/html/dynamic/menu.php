<?php defined('SYSPATH') or die('No direct script access.'); ?>
<div id="menu">
	<ul>
		<?php foreach($groups as $group) { ?>
		<li><?=@$group["label"]?></li>
		<ul>
			<?php foreach($group['buttons'] as $button) { ?>
			<a href="<?=@$button['url']?>" target="<?=@$button['target']?>"><li><?=@$button['label']?></li></a>
			<?php } // end buttons ?>
		</ul>
		<?php } // end groups ?>
	</ul>
</div>