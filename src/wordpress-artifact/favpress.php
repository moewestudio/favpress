<?php
/*
 * Plugin Name: __PRODUCT_TITLE__
 * Plugin URI: __PRODUCT_URI__
 * Description: __PRODUCT_DESCRIPTION__
 * Version: __PRODUCT_VERSION__
 * Author: __AUTHOR_NAME__
 * Author URI: __AUTHOR_URI__
 * License: GPLv3
*/

// Setup Contants
defined('FAVPRESS_PLUGIN_VERSION') or define('FAVPRESS_PLUGIN_VERSION', '__PRODUCT_VERSION__');
defined('FAVPRESS_PLUGIN_URL') or define('FAVPRESS_PLUGIN_URL', plugin_dir_url(__FILE__));
defined('FAVPRESS_PLUGIN_DIR') or define('FAVPRESS_PLUGIN_DIR', plugin_dir_path(__FILE__));
defined('FAVPRESS_PLUGIN_FILE') or define('FAVPRESS_PLUGIN_FILE', __FILE__);

require 'favpress-framework/bootstrap.php';

require 'favpress-framework/includes/plugin-update-checker-4.1/plugin-update-checker.php';
$favpress_updater = Puc_v4_Factory::buildUpdateChecker(
    'https://apps.moewe.io/favpress/master/updater.json', __FILE__, 'favpress', 24
);
$favpress_updater->throttleRedundantChecks = true;