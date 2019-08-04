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

// Define EverPress Directories.
define( 'EVERPRESS_THEME_DIR',           get_template_directory() );
define( 'EVERPRESS_THEME_INC_DIR',       EVERPRESS_THEME_DIR . '/inc' );
define( 'EVERPRESS_THEME_CLASSES_DIR',   EVERPRESS_THEME_INC_DIR . '/classes' );
define( 'EVERPRESS_THEME_FUNCTIONS_DIR', EVERPRESS_THEME_INC_DIR . '/functions' );

// Define EverPress Admin Directories.
define( 'EVERPRESS_THEME_ADMIN_DIR',            EVERPRESS_THEME_DIR . '/admin' );
define( 'EVERPRESS_THEME_ADMIN_INC_DIR',        EVERPRESS_THEME_ADMIN_DIR . '/inc' );
define( 'EVERPRESS_THEME_ADMIN_CLASSES_DIR',    EVERPRESS_THEME_ADMIN_INC_DIR . '/classes' );
define( 'EVERPRESS_THEME_ADMIN_CUSTOMIZER_DIR', EVERPRESS_THEME_ADMIN_DIR . '/customizer' );
define( 'EVERPRESS_THEME_ADMIN_PAGES_DIR',      EVERPRESS_THEME_ADMIN_DIR . '/pages' );

// Include files.
require_once EVERPRESS_THEME_INC_DIR . '/functions.php';

require_once EVERPRESS_THEME_CLASSES_DIR . '/class-everpress.php';
require_once EVERPRESS_THEME_CLASSES_DIR . '/class-everpress-theme.php';
require_once EVERPRESS_THEME_CLASSES_DIR . '/class-everpress-widget-areas.php';
require_once EVERPRESS_THEME_CLASSES_DIR . '/class-everpress-widget-area.php';
require_once EVERPRESS_THEME_CLASSES_DIR . '/class-everpress-menus.php';
require_once EVERPRESS_THEME_CLASSES_DIR . '/class-everpress-menu.php';

if ( everpress_in_admin() ) {
	require_once EVERPRESS_THEME_ADMIN_CLASSES_DIR . '/class-everpress-admin.php';
	require_once EVERPRESS_THEME_ADMIN_CLASSES_DIR . '/class-everpress-admin-page.php';
	require_once EVERPRESS_THEME_ADMIN_CLASSES_DIR . '/class-everpress-admin-pages.php';
}

if ( everpress_in_customizer() ) {
	require_once EVERPRESS_THEME_ADMIN_CLASSES_DIR . '/class-everpress-admin-customizer.php';
}

require_once EVERPRESS_THEME_INC_DIR . '/actions.php';
require_once EVERPRESS_THEME_INC_DIR . '/filters.php';
