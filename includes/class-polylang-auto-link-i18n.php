<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.codetaal.com
 * @since      1.0.0
 *
 * @package    Polylang_Auto_Link
 * @subpackage Polylang_Auto_Link/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Polylang_Auto_Link
 * @subpackage Polylang_Auto_Link/includes
 * @author     Codetaal <info@codetaal.com>
 */
class Polylang_Auto_Link_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'polylang-auto-link',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
