<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * If the `EverPress_Theme` class is handling stuff related to the Theme, then
 * what does this class handle?
 */

class EverPress {

	/**
	 * @since 1.0.0
	 */
	public static function get_everpress_path() {
		return get_template_directory();
	}

	/**
	 * @since 1.0.0
	 */
	public static function get_everpress_uri() {
		return get_template_directory_uri();
	}

	/**
	 * @since 1.0.0
	 */
	public static function get_child_theme_path() {
		return get_stylesheet_directory();
	}

	/**
	 * @since 1.0.0
	 */
	public static function get_child_theme_uri() {
		return get_stylesheet_directory_uri();
	}

}
