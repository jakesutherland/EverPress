<?php
if ( ! defined( 'ABSPATH' ) ) exit;

require_once EVERPRESS_THEME_FUNCTIONS_DIR . '/functions-everpress.php';
require_once EVERPRESS_THEME_FUNCTIONS_DIR . '/functions-everpress-menus.php';
require_once EVERPRESS_THEME_FUNCTIONS_DIR . '/functions-everpress-widgets.php';

if ( everpress_in_admin() ) {
	require_once EVERPRESS_THEME_ADMIN_INC_DIR . '/functions-admin.php';
}
