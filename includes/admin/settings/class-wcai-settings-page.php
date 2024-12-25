<?php
/**
 * WooCommerce Settings Page
 *
 * @package WC_AI_Content_Creator
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'WC_Settings_Page' ) ) {
	return;
}

/**
 * Settings page class
 */
class WCAI_Settings_Page extends WC_Settings_Page {
	/**
	 * Constructor
	 */
	public function __construct() {
		$this->id    = 'ai_content_creator';
		$this->label = __( 'AI Content Creator', 'wc-ai-content-creator' );

		add_action( 'woocommerce_settings_' . $this->id, array( $this, 'add_start_wrapper' ) );
		add_action( 'woocommerce_settings_' . $this->id, array( $this, 'output_replacements_sidebar' ), 20 );
		add_action( 'woocommerce_after_settings_' . $this->id, array( $this, 'add_end_wrapper' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_settings_assets' ) );

		parent::__construct();
	}

	/**
	 * Enqueue settings assets
	 */
	public function enqueue_settings_assets() {
		$screen = get_current_screen();

		if ( ! $screen || 'woocommerce_page_wc-settings' !== $screen->id ) {
			return;
		}

		wp_enqueue_style( 'wcai-settings', WCAI_PLUGIN_URL . 'assets/css/settings.css', array(), WCAI_VERSION );
		wp_enqueue_script( 'wcai-settings', WCAI_PLUGIN_URL . 'assets/js/settings.js', array(), WCAI_VERSION, true );
	}

	/**
	 * Add wrapper start to the setting page
	 */
	public function add_start_wrapper() {
		echo '<div id="wcai-settings-wrapper">';
	}

	/**
	 * Output replacements sidebar
	 */
	public function output_replacements_sidebar() {
		include WCAI_PLUGIN_DIR . 'includes/admin/settings/views/replacements-sidebar.php';
	}

	/**
	 * Add wrapper end to the setting page
	 */
	public function add_end_wrapper() {
		echo '</div>';
	}

	/**
	 * Get settings array
	 *
	 * @return array
	 */
	public function get_settings() {
		return include WCAI_PLUGIN_DIR . 'includes/admin/settings/data/settings-fields.php';
	}
}

return new WCAI_Settings_Page();