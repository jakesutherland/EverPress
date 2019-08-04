<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class EverPress_Menu {

	public $location;
	public $name;

	public function __construct( $args ) {
		$this->location = $args['location'];
		$this->name     = $args['name'];

		register_nav_menu( $this->location, $this->name );
	}

	public function display() {
		echo '<nav class="everpress-menu">';
		wp_nav_menu( array( 'theme_location' => $this->location, 'container' => '' ) );
		echo '</nav>';
	}

}
