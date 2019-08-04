<?php
if ( ! defined( 'ABSPATH' ) ) exit;

$wp_customize->add_section( 'everpress_styles_section' , array(
	'title'    => 'EverPress Styles',
	'priority' => 1,
	'panel'    => 'everpress_panel'
) );

$wp_customize->add_setting( 'everpress_style', array(
	'type'    => 'theme_mod',
	'default' => 'everpress_light'
) );

$wp_customize->add_control( 'everpress_style', array(
	'settings' => 'everpress_style',
	'label'    => 'EverPress Style',
	'section'  => 'everpress_styles_section',
	'priority' => 1,
	'type'     => 'select',
	'choices'  => array(
		'everpress_light' => 'EverPress Light',
		'everpress_dark'  => 'EverPress Dark'
	),
) );
