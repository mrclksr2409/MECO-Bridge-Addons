<?php
/*
Plugin Name: MECO Bridge Addons
Description: Fügt einig erweiterungen zur Bridge hinzu.
Version: 0.0.1
Author: Marcel Kaiser
Author URI: https://www.meco.de/
*/


require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/mrclksr2409/MECO-Bridge-Addons',
	__FILE__,
	'unique-plugin-or-theme-slug'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('stable-branch-name');

//Optional: If you're using a private repository, specify the access token like this:
$myUpdateChecker->setAuthentication('your-token-here');
