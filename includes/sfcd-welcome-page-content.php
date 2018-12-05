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
			<li>In your post editor just put <strong>[current_date]</strong> where you want to show the date. </li>
			<li>If you want to show the month or year you would have to add something to the shortcode.</li>
			<li>You would need to write the shortcode like this: <strong>[current_date format='F, Y']</strong></li>
		</ul>

		<p class="about-text">The shortcode basically uses the PHP date function to generate the date, month or year. That means, you can use any format the function accepts.</p>
		<p class="about-text">You can check out the <a href="<?php echo admin_url('options-general.php?page=sfcd_menu_page'); ?>" target="_blank" rel="noopener noreferrer">date formats here</a>.</p>
	</div>
	<div class="feature-section two-col">
		<h2 style="text-align: left; margin: 0 !important;">Check Out Another Cool Plugin - <span style="color: #f63d3d;">Ultimate Blocks</span>!</h2>
		<div class="col">
			<p class="about-text" style="margin-top: 0">Ultimate Blocks is a collection of essential custom blocks for Gutenberg Editor that makes it easier for you to create content with Gutenberg.</p>
			<p class="about-text">Currently, we have 14 awesome blocks! More in the making.</p>
			<p class="about-text">If you haven't checked out Gutenberg Editor yet, <a href="https://ultimateblocks.io/introduction-wordpress-gutenberg-editor/" target="_blank">learn about Gutenberg</a>.</p>
		</div>
		<div class="col">
			<a href="https://wordpress.org/plugins/ultimate-blocks/" target="_blank"><img width="500" height="300" src="<?php echo plugins_url( 'assets/img/screenshot.png', dirname( __FILE__ ) ); ?>"></a>			
		</div>
		<a class="ub_download_btn" href="https://wordpress.org/plugins/ultimate-blocks/" target="_blank"><span class="dashicons dashicons-wordpress"></span> Download Ultimate Blocks!</a>
	</div>

	<div class="feature-section two-col" style="padding: 0">
		<div class="col" style="margin-top: 0px;">
			<h3><?php _e( 'Contact', 'sfcd' ); ?></h3>
			<p class="about-text"><?php _e( 'If you have any questions or suggestions about the plugin, feel free to <a href="http://imtiazrayhan.com/contact/" target="_blank">get in touch</a>.', 'sfcd' ); ?></p>
			<p class="about-text">Connect with me on <a href="http://facebook.com/imtiaz.rayhan.bleh" rel="nofollow">Facebook</a>, <a href="https://plus.google.com/u/0/+ImtiazRayhanAsif/" rel="nofollow">Google+</a> and <a href="https://twitter.com/asif_irayhan" rel="nofollow">Twitter</a>.</p>
		</div>
		<div class="col" style="margin-top: 0px;">
			<h3><?php _e( 'Other Plugins', 'sfcd' ); ?></h3>
			<p class="about-text"><?php _e( 'You can also check out these other plugins I have created.', 'sfcd' ); ?></p>
			<ul class="about-text">
				<li>
					<a href="https://wordpress.org/plugins/wp-coupons-and-deals/" target="_blank">WP Coupons and Deals</a>
				</li>
				<li>
					<a href="https://wordpress.org/plugins/icons-with-links-widget/" target="_blank">Icons with Links Widget</a>
				</li>
			</ul>
		</div>
	</div>

</div>
