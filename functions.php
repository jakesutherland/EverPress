<?php
/**
 * EverPress functions and definitions
 *
 * @package EverPress
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Define EverPress Constants.
define( 'EVERPRESS_THEME_VERSION', '1.0.0' );
define( 'EVERPRESS_THEME_URI',     esc_url( get_template_directory_uri() ) );

// Define EverPress Paths.
define( 'EVERPRESS_THEME_PATH',           get_template_directory() );
define( 'EVERPRESS_THEME_INC_PATH',       EVERPRESS_THEME_PATH . '/inc' );
define( 'EVERPRESS_THEME_CLASSES_PATH',   EVERPRESS_THEME_INC_PATH . '/classes' );
define( 'EVERPRESS_THEME_FUNCTIONS_PATH', EVERPRESS_THEME_INC_PATH . '/functions' );

// Define EverPress Admin Paths.
define( 'EVERPRESS_THEME_ADMIN_PATH',            EVERPRESS_THEME_PATH . '/admin' );
define( 'EVERPRESS_THEME_ADMIN_INC_PATH',        EVERPRESS_THEME_ADMIN_PATH . '/inc' );
define( 'EVERPRESS_THEME_ADMIN_CLASSES_PATH',    EVERPRESS_THEME_ADMIN_INC_PATH . '/classes' );
define( 'EVERPRESS_THEME_ADMIN_CUSTOMIZER_PATH', EVERPRESS_THEME_ADMIN_PATH . '/customizer' );
define( 'EVERPRESS_THEME_ADMIN_PAGES_PATH',      EVERPRESS_THEME_ADMIN_PATH . '/pages' );

// Include files.
require_once EVERPRESS_THEME_INC_PATH . '/functions.php';

require_once EVERPRESS_THEME_CLASSES_PATH . '/class-everpress.php';
require_once EVERPRESS_THEME_CLASSES_PATH . '/class-everpress-theme.php';
require_once EVERPRESS_THEME_CLASSES_PATH . '/class-everpress-widget-areas.php';
require_once EVERPRESS_THEME_CLASSES_PATH . '/class-everpress-widget-area.php';
require_once EVERPRESS_THEME_CLASSES_PATH . '/class-everpress-menus.php';
require_once EVERPRESS_THEME_CLASSES_PATH . '/class-everpress-menu.php';

if ( everpress_in_admin() ) {
	require_once EVERPRESS_THEME_ADMIN_CLASSES_PATH . '/class-everpress-admin.php';
	require_once EVERPRESS_THEME_ADMIN_CLASSES_PATH . '/class-everpress-admin-page.php';
	require_once EVERPRESS_THEME_ADMIN_CLASSES_PATH . '/class-everpress-admin-pages.php';
}

if ( everpress_in_customizer() ) {
	require_once EVERPRESS_THEME_ADMIN_CLASSES_PATH . '/class-everpress-admin-customizer.php';
}

require_once EVERPRESS_THEME_INC_PATH . '/actions.php';
require_once EVERPRESS_THEME_INC_PATH . '/filters.php';
