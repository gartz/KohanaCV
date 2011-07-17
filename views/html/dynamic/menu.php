<?php defined('SYSPATH') or die('No direct script access.'); ?>
<ul id="menu">
<?php foreach($options as $option) { ?>
<li><?=$option->label?></li>
<?php } // end options ?>
</ul>