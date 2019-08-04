<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function everpress_widget_area( $widget_area_id ) {
	if ( EverPress_Widget_Areas::widget_area_exists( $widget_area_id ) ) {
		$widget_area = EverPress_Widget_Areas::get_widget_area( $widget_area_id );
		$widget_area->display();
	}
}
