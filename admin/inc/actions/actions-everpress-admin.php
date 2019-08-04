<?php
if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'admin_menu', array( 'EverPress_Admin', 'admin_menu' ) );

add_action( 'admin_enqueue_scripts', array( 'EverPress_Admin', 'admin_enqueue_scripts' ) );

add_action( 'admin_notices', array( 'EverPress_Admin', 'admin_notices' ) );
