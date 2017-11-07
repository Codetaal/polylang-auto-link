<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.codetaal.com
 * @since             1.0.0
 * @package           Polylang_Auto_Link
 *
 * @wordpress-plugin
 * Plugin Name:       Polylang Auto Link
 * Plugin URI:        http://www.codetaal.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Codetaal
 * Author URI:        http://www.codetaal.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       polylang-auto-link
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-polylang-auto-link-activator.php
 */
function activate_polylang_auto_link() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-polylang-auto-link-activator.php';
	Polylang_Auto_Link_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-polylang-auto-link-deactivator.php
 */
function deactivate_polylang_auto_link() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-polylang-auto-link-deactivator.php';
	Polylang_Auto_Link_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_polylang_auto_link' );
register_deactivation_hook( __FILE__, 'deactivate_polylang_auto_link' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-polylang-auto-link.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_polylang_auto_link() {

	$plugin = new Polylang_Auto_Link();
	$plugin->run();

}
run_polylang_auto_link();
