<?php
if ( ! defined( 'ABSPATH' ) ) exit;

require_once EVERPRESS_THEME_FUNCTIONS_PATH . '/functions-everpress.php';
require_once EVERPRESS_THEME_FUNCTIONS_PATH . '/functions-everpress-menus.php';
require_once EVERPRESS_THEME_FUNCTIONS_PATH . '/functions-everpress-widgets.php';

if ( everpress_in_admin() ) {
	require_once EVERPRESS_THEME_ADMIN_INC_PATH . '/functions-admin.php';
}
