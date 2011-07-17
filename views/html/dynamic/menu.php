<?php defined('SYSPATH') or die('No direct script access.'); ?>
<div id="menu">
<ul>
<?php foreach($buttons as $button) { ?>
<a href="<?=$button['url']?>"><li><?=$button['label']?></li></a>
<?php } // end buttons ?>
</ul>
</div>