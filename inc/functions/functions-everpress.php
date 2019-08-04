<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function everpress_get_theme_path() {
	return EverPress::get_everpress_path();
}

function everpress_get_theme_uri() {
	return EverPress::get_everpress_uri();
}

function everpress_get_child_theme_path() {
	return EverPress::get_child_theme_path();
}

function everpress_get_child_theme_uri() {
	return EverPress::get_child_theme_uri();
}

function everpress_in_admin() {
	if ( is_admin() ) {
		return true;
	}

	return false;
}

function everpress_in_customizer() {
	if ( is_admin() || is_customize_preview() ) {
		return true;
	}

	return false;
}