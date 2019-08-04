<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Various functionality related specifically to the WordPress Theme itself.
 * 
 * - Add theme support
 * - Enqueue CSS and JS files
 * - Register navigation menus
 * - Activation
 * - Deactivation
 */

class EverPress_Theme {

	public static function after_switch_theme() {
		if ( isset( $_GET['activated'] ) ) {
			wp_safe_redirect( admin_url( 'admin.php?page=everpress' ) );
			exit;
		}
	}

	public static function wp_enqueue_scripts() {
		// Vendor
		// EverPress

		$everpress_style = get_theme_mod( 'everpress_style', 'everpress_light' );

		if ( 'everpress_light' === $everpress_style ) {
			wp_enqueue_style( 'everpress-light', EVERPRESS_THEME_URI . '/dist/everpress-light.min.css', array(), false, 'all' );
		} elseif ( 'everpress_dark' === $everpress_style ) {
			wp_enqueue_style( 'everpress-dark', EVERPRESS_THEME_URI . '/dist/everpress-dark.min.css', array(), false, 'all' );
		}

		wp_enqueue_script( 'everpress', EVERPRESS_THEME_URI . '/dist/everpress.min.js', array(), false, true );
		// Child
	}

	public static function after_setup_theme() {
		self::add_theme_support();
		self::register_nav_menus();
	}

	private static function add_theme_support() {
		add_theme_support( 'menus' );

		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'custom-logo' );

		add_theme_support( 'html5' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'align-wide' );

		// TODO: Widgets will require additional functionality in order to support this.
		// @see https://make.wordpress.org/core/2016/03/22/implementing-selective-refresh-support-for-widgets/
		// add_theme_support( 'customize-selective-refresh-widgets' );
	}

	private static function register_nav_menus() {
		EverPress_Menus::register_menus();
	}

}
