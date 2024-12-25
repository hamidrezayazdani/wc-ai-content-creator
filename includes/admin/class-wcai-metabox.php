<?php
/**
 * Metabox Handler
 *
 * @package WC_AI_Content_Creator
 */

defined( 'ABSPATH' ) || exit;

/**
 * Metabox handler class
 */
class WCAI_Metabox {
	/**
	 * Initialize metabox
	 */
	public  function __construct() {
		add_action( 'add_meta_boxes', array( __CLASS__, 'add_metabox' ) );
	}

	/**
	 * Add metabox
	 */
	public static function add_metabox() {
		$position = apply_filters( 'wcai_metabox_position', 'normal' );
		$priority = apply_filters( 'wcai_metabox_priority', 'high' );

		add_meta_box(
			'wcai_content_creator',
			__( 'AI Content Creator', 'wc-ai-content-creator' ),
			array( __CLASS__, 'render_metabox' ),
			'product',
			$position,
			$priority,
		);
	}

	/**
	 * Render metabox
	 */
	public static function render_metabox() {
		include WCAI_PLUGIN_DIR . 'includes/admin/views/metabox.php';
	}
}

new WCAI_Metabox();