<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="format-detection" content="telephone=no">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="everpress-header">
	<div class="everpress-header-navigation-container">
		<div class="everpress-logo">
			<!-- Header Logo -->
			[logo]
		</div>
		<div class="everpress-header-navigation-left">
			<?php everpress_menu( 'everpress-header-left-menu' ); ?>
		</div>
		<div class="everpress-header-navigation-right">
			<?php everpress_menu( 'everpress-header-right-menu' ); ?>
		</div>
	</div>
</header>



<div class="everpress-vertical-navigation-left">
	<?php everpress_widget_area( 'everpress-floating-sidebar-left' ); ?>
	[veritcal navigation left]
	<!-- Vertical Navigation Left -->
	<!-- Navigation Menu -->
	<!-- Social Icons -->
	<!-- Scroll progress bar -->
	<!-- Section counter (01, 02, 03, 04, etc) -->
</div>
<div class="everpress-veritcal-navigation-right">
	<?php everpress_widget_area( 'everpress-floating-sidebar-right' ); ?>
	<!-- Vertical Navigation Right -->
	[verical navigation right]
</div>
