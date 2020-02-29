<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class EverPress_Admin_Page {
	public $slug = '';

	public function __construct( $admin_page_slug ) {
		$this->slug = $admin_page_slug;
	}

	public function display() {
		if ( ! empty( $this->slug ) ) {
			$admin_page_file = EVERPRESS_THEME_ADMIN_PAGES_PATH . '/everpress-' . $this->slug . '.php';

			if ( file_exists( $admin_page_file ) ) {
				require_once $admin_page_file;
			}
		}
	}
}
