<?php

/**
 * Welcome Page View
 *
 * @since 1.1
 *
 */

// If accessed directly, exit
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$install_ub_url = \wp_nonce_url(
	\self_admin_url( 'update.php?action=install-plugin&plugin=ultimate-blocks' ),
	'install-plugin_ultimate-blocks'
);

?>

<div class="wrap about-wrap">

	<h1><?php printf( __( 'Shortcode for Current Date', 'sfcd' ) ); ?></h1>

	<div class="about-text">
		<?php printf( __( "Thank you for using Shortcode for Current date plugin.
		Shortcode for Current Date is ready to show the current date, month and year for you. ", 'sfcd' ), '1.2.3' ); ?>
	</div>

	<div class="wp-badge welcome__logo"></div>

	<div class="col">
		<h2 style="text-align: left"><?php _e( "Let's Get Started", 'sfcd' ); ?></h3>
		<ul class="about-text">
			<If>In your post editor just put <strong>[current_date]</strong> where you want to show the date. If you want to show the month or year you would have to add something to the shortcode. You would need to write the shortcode like this: <strong>[current_date format='F, Y']</strong></li>
		</ul>

		<p class="about-text">The shortcode basically uses the PHP date function to generate the date, month or year. That means, you can use any format the function accepts.</p>
		<p class="about-text">You can check out the <a href="<?php echo admin_url('options-general.php?page=sfcd_menu_page'); ?>" target="_blank" rel="noopener noreferrer">date formats here</a>.</p>
	</div>
	
	<div class="col">
		<h2 style="text-align: left;">We Have Other Very Useful Plugins for You!</h2>
		<p class="about-text">1. <a href="https://wordpress.org/plugins/wp-table-builder/" target="_blank">WP Table Builder</a> - Drag and Drop Table Builder Plugin. Build Responsive Tables insanely easily.</p>
		<p class="about-text">2. <a href="https://wordpress.org/plugins/ultimate-blocks/" target="_blank">Ultimate Blocks</a> - Custom Gutenberg Blocks for Bloggers and Marketers.</p>
		<p class="about-text">3. <a href="https://wordpress.org/plugins/wp-coupons-and-deals/" target="_blank">WP Coupons and Deals</a> - Best Coupons Plugin for Bloggers and Affiliate Markters.</p>
	</div>

</div>
