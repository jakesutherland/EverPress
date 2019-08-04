<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<div class="wrap">
	<div class="everpress-admin-welcome">
		<h5>Welcome To</h5>
		<h1>EverPress</h1>

		<p>[EverPress Theme Screenshot]</p>

		<?php if ( ! everpress_is_theme_setup() ) : ?>
			<a href="<?php echo admin_url( 'admin.php?page=everpress&action=setup' ); ?>" class="button button-primary button-hero">Start EverPress Theme Setup</a>
		<?php endif; ?>

		<p class="everpress-admin-footer-links"><a href="https://www.everpresstheme.com" target="_blank">EverPressTheme.com</a> &nbsp; &middot; &nbsp; <a href="https://www.everpresstheme.com/documentation" target="_blank">Documentation</a> &nbsp; &middot; &nbsp; <a href="https://www.everpresstheme.com/support">Help &amp; Support</a> &nbsp; &middot; &nbsp; <a href="https://github.com/jakesutherland/EverPress" target="_blank">GitHub Project</a></p>
	</div>
</div>
