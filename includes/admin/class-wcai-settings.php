<?php
/**
 * WooCommerce AI Content Creator Settings
 *
 * @package WC_AI_Content_Creator
 */

defined( 'ABSPATH' ) || exit;

/**
 * Settings class
 */
class WCAI_Settings {
	/**
	 * Constructor
	 */
	public function __construct() {
		add_filter( 'woocommerce_get_settings_pages', array( $this, 'add_settings_page' ) );
	}

	/**
	 * Add settings page
	 *
	 * @param array $settings Settings pages.
	 *
	 * @return array
	 */
	public function add_settings_page( $settings ) {
		$settings[] = include WCAI_PLUGIN_DIR . 'includes/admin/settings/class-wcai-settings-page.php';

		return $settings;
	}
}