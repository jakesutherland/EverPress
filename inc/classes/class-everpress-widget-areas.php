<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class EverPress_Widget_Areas {

	private static $registered_widget_areas = array();

	public static function widgets_init() {
		// Registers the various individual Widget Areas (sidebars).

		// EverPress Floating Sidebar Left.
		self::register_widget_area( array(
			'id'   => 'everpress-floating-sidebar-left',
			'name' => 'EverPress Floating Sidebar Left'
		) );

		// EverPress Floating Sidebar Right.
		self::register_widget_area( array(
			'id'   => 'everpress-floating-sidebar-right',
			'name' => 'EverPress Floating Sidebar Right'
		) );

		do_action( 'everpress_widgets_init' );
	}

	private static function register_widget_area( $args = array() ) {
		self::$registered_widget_areas[ $args['id'] ] = new EverPress_Widget_Area( $args );
	}

	public static function get_widget_area( $widget_area_id ) {
		if ( ! self::widget_area_exists( $widget_area_id ) ) {
			return false;
		}

		return self::$registered_widget_areas[ $widget_area_id ];
	}

	public static function widget_area_exists( $widget_area_id ) {
		return array_key_exists( $widget_area_id, self::$registered_widget_areas );
	}

}
