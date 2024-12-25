<?php
/**
 * Plugin Loader
 *
 * @package WC_AI_Content_Creator
 */

defined( 'ABSPATH' ) || exit;

/**
 * Loader class
 */
class WCAI_Loader {
	/**
	 * Initialize plugin
	 */
	public static function init() {
		if ( ! function_exists( 'WC' ) ) {
			return;
		}

		// Core classes
		require_once WCAI_PLUGIN_DIR . 'includes/class-wcai-hooks.php';
		require_once WCAI_PLUGIN_DIR . 'includes/class-wcai-assets.php';
		require_once WCAI_PLUGIN_DIR . 'includes/admin/class-wcai-admin.php';
		require_once WCAI_PLUGIN_DIR . 'includes/admin/class-wcai-settings.php';
		require_once WCAI_PLUGIN_DIR . 'includes/admin/class-wcai-metabox.php';
		require_once WCAI_PLUGIN_DIR . 'includes/class-wcai-replacements.php';

		// Initialize components
		new WCAI_Settings();
		WCAI_Hooks::init();
		WCAI_Assets::init();
		WCAI_Admin::init();
	}
}