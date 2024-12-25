<?php
/**
 * Admin Handler
 *
 * @package WC_AI_Content_Creator
 */

defined( 'ABSPATH' ) || exit;

/**
 * Admin handler class
 */
class WCAI_Admin {
	/**
	 * Initialize admin
	 */
	public static function init() {
		add_action( 'plugins_loaded', array( __CLASS__, 'load_textdomain' ) );
		add_action( 'admin_init', array( __CLASS__, 'check_wc_active' ) );
	}

	/**
	 * Load plugin text domain
	 */
	public static function load_textdomain() {
		load_plugin_textdomain(
			'wc-ai-content-creator',
			false,
			dirname( plugin_basename( WCAI_PLUGIN_FILE ) ) . '/languages'
		);
	}

	/**
	 * Check if WooCommerce is active
	 */
	public static function check_wc_active() {
		if ( ! class_exists( 'WooCommerce' ) ) {
			add_action( 'admin_notices', function () {
				?>
                <div class="notice notice-error">
                    <p><?php esc_html_e( 'WooCommerce AI Content Creator requires WooCommerce to be installed and active.', 'wc-ai-content-creator' ); ?></p>
                </div>
				<?php
			} );
		}
	}
}