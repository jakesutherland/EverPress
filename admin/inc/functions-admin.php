<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function everpress_is_theme_setup() {
	return get_option( 'everpress_theme_setup', false );
}
