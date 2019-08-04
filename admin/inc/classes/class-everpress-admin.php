<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class EverPress_Admin {
	public static function admin_enqueue_scripts() {
		// EverPress Admin CSS.
		wp_enqueue_style( 'everpress-admin', EVERPRESS_THEME_URI . '/dist/everpress-admin.min.css', array(), false, 'all' );
	}

	public static function admin_menu() {
		add_menu_page( 'EverPress', 'EverPress', 'manage_options', 'everpress', array( 'EverPress_Admin_Pages', 'welcome' ), 'dashicons-welcome-widgets-menus', 81 );
		add_submenu_page( 'everpress', 'Welcome', 'Welcome', 'manage_options', 'everpress', array( 'EverPress_Admin_Pages', 'welcome' ) );
		add_submenu_page( 'everpress', 'Settings', 'Settings', 'manage_options', 'everpress-settings', array( 'EverPress_Admin_Pages', 'settings' ) );
		add_submenu_page( 'everpress', 'Status', 'Status', 'manage_options', 'everpress-status', array( 'EverPress_Admin_Pages', 'status' ) );
		add_submenu_page( 'everpress', 'Documentation', 'Documentation', 'manage_options', 'everpress-documentation', array( 'EverPress_Admin_Pages', 'documentation' ) );
		add_submenu_page( 'everpress', 'Help', 'Help', 'manage_options', 'everpress-help', array( 'EverPress_Admin_Pages', 'help' ) );
	}

	public static function admin_notices() {
		global $pagenow;

		if ( 'widgets.php' === $pagenow ) {
			echo '<div class="notice notice-info">';
			echo '<p><strong>EverPress Notice:</strong> For a better, more visual widget editing experience, we recommend using the <a href="' . admin_url( 'customize.php' ) . '">WordPress Customizer</a> instead.</p>';
			echo '</div>';
		}
	}
}
