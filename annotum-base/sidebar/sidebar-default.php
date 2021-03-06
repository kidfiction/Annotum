<?php

/**
 * @package anno
 * This file is part of the Annotum theme for WordPress
 * Built on the Carrington theme framework <http://carringtontheme.com>
 *
 * Copyright 2008-2015 Crowd Favorite, Ltd. All rights reserved. <http://crowdfavorite.com>
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 */
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

$sidebar = 'default';
if (is_page()) {
	$sidebar = 'sidebar-page';
}
else if (is_singular() && get_post_type() == 'article') {
	$sidebar = 'sidebar-article';
}
if (is_dynamic_sidebar($sidebar)) {
	dynamic_sidebar($sidebar);
}
else {
	anno_default_widgets();
}

?>
