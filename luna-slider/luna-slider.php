<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.websitehill.com/about-us/
 * @since             1.0.0
 * @package           Luna_Slider
 *
 * @wordpress-plugin
 * Plugin Name:       Luna Slider
 * Plugin URI:        www.websitehill.com
 * Description:       Luna Slider for Intimina by Jacek Gajewski, using there Owl Carousel v2.3.4 for display Posts in Blog Posts page. Code edit only.  
 * Version:           1.0.0
 * Author:            Jacek Gajewski
 * Author URI:        www.websitehill.com/about-us/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       luna-slider
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'LUNA_SLIDER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-luna-slider-activator.php
 */
function activate_luna_slider() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-luna-slider-activator.php';
	Luna_Slider_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-luna-slider-deactivator.php
 */
function deactivate_luna_slider() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-luna-slider-deactivator.php';
	Luna_Slider_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_luna_slider' );
register_deactivation_hook( __FILE__, 'deactivate_luna_slider' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-luna-slider.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_luna_slider() {

	$plugin = new Luna_Slider();
	$plugin->run();

}
run_luna_slider();



