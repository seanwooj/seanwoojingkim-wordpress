<?php
/*-----------------------------------------------------------------------------------*/
/* This file will be referenced every time a template/page loads on your Wordpress site
/* This is the place to define custom fxns and specialty code
/*-----------------------------------------------------------------------------------*/

/**
 * Includes
 */

$theme_includes = array(
	'lib/scripts.php',                // Scripts and stylesheets
	'lib/nav.php',                    // Navigation and sidebar definition
	'lib/config.php',                 // Configuration and theme support
  'lib/wrapper.php'                 // Wrapper functionality
);

foreach ($theme_includes as $file) {
	if(!$filepath = locate_template($file)) {
		trigger_error(sprintf(__('Error locating %s for inclusion', 'naked'), $file), E_USER_ERROR);
	}

  require_once $filepath;
	unset($file, $filepath);
}

