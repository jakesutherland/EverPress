<?php
if ( ! defined( 'ABSPATH' ) ) exit;

add_filter( 'nav_menu_css_class', array( 'EverPress_Menus', 'nav_menu_css_class' ), 1, 3 );
add_filter( 'wp_nav_menu', array( 'EverPress_Menus', 'wp_nav_menu' ) );
add_filter( 'nav_menu_submenu_css_class', array( 'EverPress_Menus', 'nav_menu_submenu_css_class' ), 10, 3 );
