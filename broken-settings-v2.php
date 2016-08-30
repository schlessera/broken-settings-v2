<?php
/**
 * Example Code: Settings Page - Broken Implementation v2.
 *
 * This code is part of the article "Using A Config To Write Reusable Code"
 * as published on https://www.alainschlesser.com/.
 *
 * @see       https://www.alainschlesser.com/config-files-for-reusable-code/
 *
 * @package   AlainSchlesser\BrokenSettings2
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   GPL-2.0+
 * @link      https://www.alainschlesser.com/
 * @copyright 2016 Alain Schlesser
 *
 * @wordpress-plugin
 * Plugin Name: Broken Settings v2
 * Plugin URI:  https://www.alainschlesser.com/config-files-for-reusable-code/
 * Description: Example Code: Settings Page - Broken Implementation v2
 * Version:     0.1.0
 * Author:      Alain Schlesser
 * Author URI:  https://www.alainschlesser.com/
 * Text Domain: as-settings-broken-v2
 * Domain Path: /languages
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace AlainSchlesser\BrokenSettings2;

use AlainSchlesser\BrokenSettings2\Plugin as BrokenSettings2;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Remember plugin root folder.
if ( ! defined( 'AS_BROKEN_SETTINGS_2_DIR' ) ) {
	define( 'AS_BROKEN_SETTINGS_2_DIR', plugin_dir_path( __FILE__ ) );
}

// Load Composer autoloader.
if ( file_exists( AS_BROKEN_SETTINGS_2_DIR . 'vendor/autoload.php' ) ) {
	require_once AS_BROKEN_SETTINGS_2_DIR . 'vendor/autoload.php';
}

// Initialize the plugin.
( new BrokenSettings2() )->init();
