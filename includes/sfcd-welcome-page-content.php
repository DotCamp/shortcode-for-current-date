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
			<li>In your post editor just put <strong>[current_date]</strong> where you want to show the date. </li>
			<li>If you want to show the month or year you would have to add something to the shortcode.</li>
			<li>You would need to write the shortcode like this: <strong>[current_date format='F, Y']</strong></li>
		</ul>

		<p class="about-text">The shortcode basically uses the PHP date function to generate the date, month or year. That means, you can use any format the function accepts.</p>
		<p class="about-text">You can check out the <a href="<?php echo admin_url('options-general.php?page=sfcd_menu_page'); ?>" target="_blank" rel="noopener noreferrer">date formats here</a>.</p>
	</div>
	<div class="feature-section two-col">
		<h2 style="text-align: left; margin: 0 !important; padding-top: 20px !important;">Create Better Content With Gutenberg and <span style="color: #f63d3d;">Ultimate Blocks</span>!</h2>
		<div class="col">
			<p class="about-text" style="margin-top: 0">Ultimate Blocks is a collection of essential custom blocks for Gutenberg Editor that makes it easier for you to create content with Gutenberg.</p>
			<p class="about-text">Currently, we have 14 awesome blocks! More in the making.</p>
			<p class="about-text">If you haven't checked out Gutenberg Editor yet, <a href="https://ultimateblocks.io/introduction-wordpress-gutenberg-editor/" target="_blank">learn about Gutenberg</a>.</p>
		</div>
		<div class="col">
			<a href="https://downloads.wordpress.org/plugin/ultimate-blocks.zip" target="_blank"><img width="500" height="300" src="<?php echo plugins_url( 'assets/img/screenshot.png', dirname( __FILE__ ) ); ?>"></a>			
		</div>
		<a class="ub_download_btn" href="<?php echo \esc_url( $install_ub_url ); ?>"><span class="dashicons dashicons-wordpress"></span> Install Ultimate Blocks!</a>
	</div>

</div>
