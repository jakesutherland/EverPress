<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function everpress_menu( $location ) {
	if ( EverPress_Menus::menu_exists( $location ) ) {
		$menu = EverPress_Menus::get_menu( $location );
		$menu->display();
	}
}
