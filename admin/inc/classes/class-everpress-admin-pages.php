<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class EverPress_Admin_Pages {

	public static function welcome() {
		if ( isset( $_GET['action'] ) && 'setup' === $_GET['action'] ) {
			$admin_page = new EverPress_Admin_Page( 'setup' );
			$admin_page->display();
		} else {
			$admin_page = new EverPress_Admin_Page( 'welcome' );
			$admin_page->display();
		}
	}

	public static function settings() {
		$admin_page = new EverPress_Admin_Page( 'settings' );
		$admin_page->display();
	}

	public static function status() {
		$admin_page = new EverPress_Admin_Page( 'status' );
		$admin_page->display();
	}

	public static function documentation() {
		$admin_page = new EverPress_Admin_Page( 'documentation' );
		$admin_page->display();
	}

	public static function help() {
		$admin_page = new EverPress_Admin_Page( 'help' );
		$admin_page->display();
	}
}
