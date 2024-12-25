<?php
/**
 * Assets Handler
 *
 * @package WC_AI_Content_Creator
 */

defined( 'ABSPATH' ) || exit;

/**
 * Assets handler class
 */
class WCAI_Assets {
	/**
	 * Initialize assets
	 */
	public static function init() {
		add_action( 'admin_enqueue_scripts', array( __CLASS__, 'enqueue_admin_assets' ) );
	}

	/**
	 * Enqueue admin assets
	 */
	public static function enqueue_admin_assets() {
		$screen = get_current_screen();

		if ( 'product' !== $screen->id ) {
			return;
		}

		wp_enqueue_style(
			'wcai-admin',
			WCAI_PLUGIN_URL . 'assets/css/admin.css',
			array(),
			WCAI_VERSION
		);

		wp_enqueue_script(
			'wcai-admin',
			WCAI_PLUGIN_URL . 'assets/js/admin.js',
			array(),
			WCAI_VERSION,
			true
		);

		wp_localize_script( 'wcai-admin', 'wcaiData', array(
			'ajaxUrl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'wcai_nonce' ),
			'i18n'    => array(
				'copied' => __( 'Copied!', 'wc-ai-content-creator' ),
				'copy'   => __( 'Copy', 'wc-ai-content-creator' ),
			),
			'prompts' => self::get_prompts(),
		) );
	}

	/**
	 * Get prompts
	 *
	 * @return array
	 */
	private static function get_prompts() {
		return array(
			'title'      => get_option( 'wcai_title_prompt' ),
			'content'    => get_option( 'wcai_content_prompt' ),
			'excerpt'    => get_option( 'wcai_excerpt_prompt' ),
			'metadata'   => get_option( 'wcai_metadata_prompt' ),
			'attributes' => get_option( 'wcai_attributes_prompt' ),
		);
	}
}