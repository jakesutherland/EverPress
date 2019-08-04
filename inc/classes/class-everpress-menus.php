<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class EverPress_Menus {

	private static $registered_menus = array();

	public static function register_menus() {
		// EverPress Header Left Menu.
		self::register_menu( array(
			'location' => 'everpress-header-left-menu',
			'name'     => 'EverPress Header Left Menu'
		) );

		// EverPress Header Right Menu.
		self::register_menu( array(
			'location' => 'everpress-header-right-menu',
			'name'     => 'EverPress Header Right Menu'
		) );

		do_action( 'everpress_register_menus' );
	}

	private static function register_menu( $args ) {
		self::$registered_menus[ $args['location'] ] = new EverPress_Menu( $args );
	}

	public static function get_menu( $location ) {
		if ( ! self::menu_exists( $location ) ) {
			return false;
		}

		return self::$registered_menus[ $location ];
	}

	public static function menu_exists( $location ) {
		return array_key_exists( $location, self::$registered_menus );
	}

	public function nav_menu_css_class( $classes, $item, $args ) {
		$classes[] = 'nav-item';

		return $classes;
	}

	public function wp_nav_menu( $ulclass ) {
		return preg_replace( '/<a /', '<a class="nav-link"', $ulclass );
	}

	public function nav_menu_submenu_css_class( $classes, $args, $depth ) {
		$classes[] = 'nav nav-fill';

		return $classes;
	}

}
