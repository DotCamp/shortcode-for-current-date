<?php
// If accessed directly, exit
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Class SFCD_Admin_Notices
 *
 * Custom Admin notices for post publish, update or draft.
 *
 * @since 2.0
 */
class SFCD_Admin_Notices {
	/**
	 * Adding the filter.
	 *
	 * @since 2.0
	 */
	public static function init() {
		add_action( 'admin_notices', array( __CLASS__, 'review_notice' ), 20 );
		add_action( 'wp_ajax_sfcdReviewNoticeHide', array( __CLASS__, 'sfcd_hide_review_notify' ) );
	}
	/**
	 * Generating the review notice.
	 *
	 * @since 2.0
	 */
	public static function review_notice() {
        // Please rate us
        $install_date = get_option( 'sfcd_installDate' );
        $display_date = date( 'Y-m-d h:i:s' );
        $datetime1 = new DateTime( $install_date );
        $datetime2 = new DateTime( $display_date );
        $diff_intrval = round( ($datetime2->format( 'U' ) - $datetime1->format( 'U' )) / (60 * 60 * 24) );
		if ( $diff_intrval >= 14 && get_option( 'sfcd_review_notify' ) == "no" ) {
			?>
            <div class="sfcd-review-notice notice notice-info">
                <p style="font-size: 14px;">
					<?php _e( 'Hey,<br> I noticed that you have been using <b>Shortcode for Current Date Plugin</b> for a while now - that’s awesome! If you are finding it useful, consider buying me a cup of coffee. <br>~ Imtiaz Rayhan', 'sfcd-coupon' ); ?>
                </p>
                <ul>
                    <li><a style="margin-right: 5px; margin-bottom: 5px;" class="button-primary"
                           href="https://www.paypal.me/imtiazrayhan/"
                           target="_blank">Sure,
                            you deserve it.</a>
                        <a style="margin-right: 5px;" class="sfcd_HideReview_Notice button" href="javascript:void(0);">
                            I already did.</a>
                        <a class="sfcd_HideReview_Notice button" href="javascript:void(0);">No, not good enough.</a>
                    </li>
                </ul>
            </div>
            <script>
                jQuery(document).ready(function ($) {
                    jQuery('.sfcd_HideReview_Notice').click(function () {
                        var data = {'action': 'sfcdReviewNoticeHide'};
                        jQuery.ajax({
                            url: "<?php echo admin_url( 'admin-ajax.php' ); ?>",
                            type: "post",
                            data: data,
                            dataType: "json",
                            async: !0,
                            success: function (notice_hide) {
                                if (notice_hide == "success") {
                                    jQuery('.sfcd-review-notice').slideUp('fast');
                                }
                            }
                        });
                    });
                });
            </script>
			<?php
		}
	}
	/**
	 * Hides the review notice.
	 *
	 * @since 2.0
	 */
	static function sfcd_hide_review_notify() {
		update_option( 'sfcd_review_notify', 'yes' );
		echo json_encode( array( "success" ) );
		exit;
	}
}