<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * References a single Widget Area (sidebar).
 */

class EverPress_Widget_Area {

	public $id;
	public $name;

	public function __construct( $args = array() ) {
		$defaults = array(
			'name'          => '',
			'id'            => '',
			'description'   => '',
			'class'         => '',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => ''
		);

		$args = wp_parse_args( $args, $defaults );

		$this->id   = $args['id'];
		$this->name = $args['name'];

		// registers the widget area (sidebar).
		register_sidebar( array(
			'name'          => $args['name'],
			'id'            => $args['id'],
			'description'   => $args['description'],
			'class'         => $args['class'],
			'before_widget' => $args['before_widget'],
			'after_widget'  => $args['after_widget'],
			'before_title'  => $args['before_title'],
			'after_title'   => $args['after_title'],
		) );
	}

	public function display() {
		if ( is_active_sidebar( $this->id ) ) {
			dynamic_sidebar( $this->id );
		}
	}

}
