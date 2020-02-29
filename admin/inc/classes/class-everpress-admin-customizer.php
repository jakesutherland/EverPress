<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class EverPress_Admin_Customizer {
	public static function customize_register( $wp_customize ) {

		require_once EVERPRESS_THEME_ADMIN_CUSTOMIZER_PATH . '/panels/everpress-panel.php';

		require_once EVERPRESS_THEME_ADMIN_CUSTOMIZER_PATH . '/sections/everpress-styles/everpress-styles.php';

	}
}
