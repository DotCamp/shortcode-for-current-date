<?php

/**
 * Plugin Name: Shortcode For Current Date
 * Plugin URI: http://wordpress.org/plugins/shortcode-for-current-date
 * Description: Insert current Date, Month or Year anywhere with a simple shortcode.
 * Version: 2.1.7
 * Author: Imtiaz Rayhan
 * Author URI: http://dotcamp.com/
 * License: GPLv2 or later
 * Text Domain: sfcd
 * @package sfcd_plugin
 * @author Imtiaz Rayhan
 */

// If accessed directly, exit
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Shortcode_For_Current_Date' ) ) {

	/**
	 * Class Shortcode_For_Current_Date. Contains everything.
	 *
	 * @since 1.0
	 */
	class Shortcode_For_Current_Date {

		/**
		 * Shortcode_For_Current_Date constructor.
		 * Adds filters to execute shortcodes in necessary places.
		 *
		 * @since 1.0
		 */
		public function __construct() {

			add_shortcode( 'current_date', array( $this, 'sfcd_date_shortcode' ) );

		}

		/**
		 * Month Shortcode build.
		 *
		 * @since 1.0
		 */
		public function sfcd_date_shortcode( $atts ) {

			/**
			 * Shortcode attributes.
			 *
			 * @since 1.0
			 */
			$atts = shortcode_atts(
				array(
					'format' => '',
					'size'   => '',
					'color'  => ''
				), $atts
			);

			if ( ! empty( $atts['format'] ) ) {
				$dateFormat = sanitize_text_field( $atts['format'] );
			} else {
				$dateFormat = 'jS F Y';
			}

			/* Changed [return date( $dateFormat );]
			 * to the following line in order to retrieve
			 * WP time as opposed to server time.
			 *
			 * @author UN_Rick
			 */
			if ( ! empty( $atts['size'] ) || ! empty( $atts['color'] ) ) {
				$size_attr  = esc_attr( $atts['size'] );
				$color_attr = esc_attr( $atts['color'] );

				if ( $dateFormat == 'z' ) {
					return "<p class='sfcd-date' style='font-size:" . $size_attr . "; color: " . $color_attr . ";'>" . ( date_i18n( $dateFormat ) + 1 ) . "</p>";
				} else {
					return "<p class='sfcd-date' style='font-size:" . $size_attr . "; color: " . $color_attr . ";'>" . date_i18n( $dateFormat ) . "</p>";
				}
			} else {
				if ( $dateFormat == 'z' ) {
					return date_i18n( $dateFormat ) + 1;
				} else {
					return date_i18n( $dateFormat );
				}
			}
		}
	}
}

/* Block Registration */
function Shortcode_For_Current_Date_Block_Register() {

	wp_register_script(
		'shortcode-for-current-date-editor-script',
		plugins_url( 'dist/editor.js', __FILE__ ),
		array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor', 'wp-components', 'wp-date' )
	);

	wp_register_script(
		'shortcode-for-current-date-script',
		plugins_url( 'dist/script.js', __FILE__ ),
		array()
	);


	if ( function_exists( 'register_block_type' ) ) {
		register_block_type( 'shortcode-for-current-date/block',
			array_merge(
				array(
					'editor_script' => 'shortcode-for-current-date-editor-script',
					'script'        => 'shortcode-for-current-date-script'
				)
			)
		);
	}


}

/* END Block Registration */

new Shortcode_For_Current_Date();

require_once plugin_dir_path( __FILE__ ) . '/includes/sfcd-welcome-page.php';
require_once plugin_dir_path( __FILE__ ) . '/includes/sfcd-menu-page.php';
require_once plugin_dir_path( __FILE__ ) . '/includes/sfcd-admin-notices.php';

SFCD_Welcome_Page::init();
SFCD_Menu_Page::init();
SFCD_Admin_Notices::init();

register_activation_hook( __FILE__, array( 'SFCD_Welcome_Page', 'sfcd_welcome_activate' ) );
register_deactivation_hook( __FILE__, array( 'SFCD_Welcome_Page', 'sfcd_welcome_deactivate' ) );

add_filter( 'the_title', 'do_shortcode' );
add_action( 'init', 'Shortcode_For_Current_Date_Block_Register' );

