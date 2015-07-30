<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://luetkemj.github.io
 * @since             1.0.0
 * @package           Altlab_Cdf_Shortcode
 *
 * @wordpress-plugin
 * Plugin Name:       Alt Lab CDF Shortcode
 * Plugin URI:        https://github.com/vcualtlab/cdf-shortcode
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Mark Luetke
 * Author URI:        http://luetkemj.github.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       altlab-cdf-shortcode
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-altlab-cdf-shortcode-activator.php
 */
function activate_altlab_cdf_shortcode() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-altlab-cdf-shortcode-activator.php';
	Altlab_Cdf_Shortcode_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-altlab-cdf-shortcode-deactivator.php
 */
function deactivate_altlab_cdf_shortcode() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-altlab-cdf-shortcode-deactivator.php';
	Altlab_Cdf_Shortcode_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_altlab_cdf_shortcode' );
register_deactivation_hook( __FILE__, 'deactivate_altlab_cdf_shortcode' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-altlab-cdf-shortcode.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_altlab_cdf_shortcode() {

	$plugin = new Altlab_Cdf_Shortcode();
	$plugin->run();

}
run_altlab_cdf_shortcode();
