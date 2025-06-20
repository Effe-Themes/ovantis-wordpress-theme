<?php
add_action( 'admin_menu', 'ovantis_getting_started' );
function ovantis_getting_started() {
	add_theme_page( esc_html__('Ovantis Theme', 'ovantis'), esc_html__('Ovantis Theme', 'ovantis'), 'edit_theme_options', 'ovantis-guide-page', 'ovantis_test_guide');
}

// Add a Custom CSS file to WP Admin Area
function ovantis_admin_theme_style() {
	wp_enqueue_style('ovantis-admin-style', get_template_directory_uri() . '/inc/get-started/get-started.css');
}
add_action('admin_enqueue_scripts', 'ovantis_admin_theme_style');

// Guidline for about theme
function ovantis_test_guide() { 
	// Custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'ovantis' );
?>
<div class="wrapper-info">
	<div class="intro">
		<div class="col-left">
			<h1 class="theme-title"><?php esc_html_e( 'Ovantis WordPress Theme', 'ovantis' ); ?></h1>
			<p><?php esc_html_e('Version: ','ovantis'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="col-right text-align-end">
			<a class="bg-color bg-color" href="<?php echo esc_url( OVANTIS_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to PRO', 'ovantis'); ?></a>
		</div>
	</div>
	<div class="col-left">
		<div class="started">
			<hr>
			<div class="centerbold">
				<h4><?php esc_html_e('Unlock Premium Features', 'ovantis'); ?></h4>
				<p><?php esc_html_e('Unlock the full potential of your website with our Pro theme upgrade.', 'ovantis'); ?></p>
				<a class="bg-color" href="<?php echo esc_url( OVANTIS_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade Now', 'ovantis'); ?></a>
				<hr>
				<h4><?php esc_html_e('Preview Demo', 'ovantis'); ?></h4>
				<p><?php esc_html_e('See our theme in action! Take a tour of our demo site to experience firsthand the stunning design and powerful features our theme has to offer.', 'ovantis'); ?></p>
				<a class="bg-color" href="<?php echo esc_url( OVANTIS_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e('Theme Demo', 'ovantis'); ?></a>
				<hr>
				<h4><?php esc_html_e('Need Help?', 'ovantis'); ?></h4>
				<p><?php esc_html_e('Visit our support forum for assistance with any questions or feedback you may have regarding the theme.', 'ovantis'); ?></p>
				<a href="<?php echo esc_url( OVANTIS_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'ovantis'); ?></a>
				<hr>
				<h4><?php esc_html_e('Are you enjoying our theme?', 'ovantis'); ?></h4>
				<p><?php esc_html_e('We\'d love to hear your thoughts! Leave us a review and share your feedback.', 'ovantis'); ?></p>
				<a href="<?php echo esc_url( OVANTIS_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'ovantis'); ?></a>
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-inner"> 
			<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
		</div>
	</div>
</div>
<?php } ?>