<?php
if ( ! defined( 'ABSPATH' ) ) exit;

require_once EVERPRESS_THEME_DIR . '/inc/actions/actions-everpress.php';

if ( everpress_in_admin() ) {
	require_once EVERPRESS_THEME_ADMIN_INC_DIR . '/actions/actions-everpress-admin.php';
}

if ( everpress_in_customizer() ) {
	require_once EVERPRESS_THEME_ADMIN_INC_DIR . '/actions/actions-everpress-admin-customizer.php';
}
