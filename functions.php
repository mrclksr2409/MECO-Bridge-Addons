<?php
/*
Plugin Name: MECO Addons
Description: Fügt einig erweiterungen zur Bridge hinzu.
Version: 0.0.1
Author: Marcel Kaiser
Author URI: https://www.meco.de/
*/

////////////////////////////////////////////////////////////////////////////////////////////////////////

require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/mrclksr2409/MECO-Bridge-Addons',
	__FILE__,
	'MECOAddons'
);

// Set the branch that contains the stable release.
$myUpdateChecker->setBranch('stable-branch-name');

// Optional: If you're using a private repository, specify the access token like this:
// $myUpdateChecker->setAuthentication('your-token-here');

////////////////////////////////////////////////////////////////////////////////////////////////////////

// Register the style like this for a plugin:
function meco_addons_styles()
{
    wp_register_style( 'custom-style', plugins_url( '/css/meco_addons_styles.css', __FILE__ ), array(), '1', 'all' );
    wp_enqueue_style( 'custom-style' );
}

add_action( 'wp_enqueue_scripts', 'meco_addons_styles' );

////////////////////////////////////////////////////////////////////////////////////////////////////////

include_once('inc/site-box.inc.php');
