<?php
if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'after_switch_theme', array( 'EverPress_Theme', 'after_switch_theme' ) );

add_action( 'wp_enqueue_scripts', array( 'EverPress_Theme', 'wp_enqueue_scripts' ) );

add_action( 'after_setup_theme', array( 'EverPress_Theme', 'after_setup_theme' ) );

add_action( 'widgets_init', array( 'EverPress_Widget_Areas', 'widgets_init' ) );
