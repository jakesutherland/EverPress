<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class EverPress_Widget extends WP_Widget {

	public function __construct() {}

	public function widget( $args, $instance ) {
		echo $args['before_widget'];



		echo $args['after_widget'];
	}

	public function form( $instance ) {}

	public function update( $new_instance, $old_instance ) {
		$instance = array();

		return $instance;
	}

}
