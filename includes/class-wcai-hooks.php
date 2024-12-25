<?php
/**
 * Hooks and Filters Handler
 *
 * @package WC_AI_Content_Creator
 */

defined( 'ABSPATH' ) || exit;

/**
 * Hooks handler class
 */
class WCAI_Hooks {
	/**
	 * Initialize hooks
	 */
	public static function init() {
		// Settings
		add_filter( 'wcai_settings_fields', array( __CLASS__, 'filter_settings_fields' ) );
		add_filter( 'wcai_prompt_types', array( __CLASS__, 'filter_prompt_types' ) );

		// Metabox
		add_filter( 'wcai_metabox_position', array( __CLASS__, 'filter_metabox_position' ) );
		add_filter( 'wcai_metabox_priority', array( __CLASS__, 'filter_metabox_priority' ) );

		// Replacements
		add_filter( 'wcai_replacement_data', array( __CLASS__, 'filter_replacement_data' ), 10, 2 );
		add_filter( 'wcai_replaced_content', array( __CLASS__, 'filter_replaced_content' ), 10, 3 );

		// Actions
		add_action( 'wcai_before_metabox_content', array( __CLASS__, 'before_metabox_content' ) );
		add_action( 'wcai_after_metabox_content', array( __CLASS__, 'after_metabox_content' ) );
		add_action( 'wcai_before_prompt_select', array( __CLASS__, 'before_prompt_select' ) );
		add_action( 'wcai_after_prompt_select', array( __CLASS__, 'after_prompt_select' ) );
	}

	/**
	 * Filter settings fields
	 *
	 * @param array $fields Settings fields.
	 *
	 * @return array
	 */
	public static function filter_settings_fields( $fields ) {
		return $fields;
	}

	/**
	 * Filter prompt types
	 *
	 * @param array $types Prompt types.
	 *
	 * @return array
	 */
	public static function filter_prompt_types( $types ) {
		return $types;
	}

	/**
	 * Filter metabox position
	 *
	 * @param string $position Metabox position.
	 *
	 * @return string
	 */
	public static function filter_metabox_position( $position ) {
		return $position;
	}

	/**
	 * Filter metabox priority
	 *
	 * @param string $priority Metabox priority.
	 *
	 * @return string
	 */
	public static function filter_metabox_priority( $priority ) {
		return $priority;
	}

	/**
	 * Filter replacement data
	 *
	 * @param array $data Replacement data.
	 * @param WC_Product $product Product object.
	 *
	 * @return array
	 */
	public static function filter_replacement_data( $data, $product ) {
		return $data;
	}

	/**
	 * Filter replaced content
	 *
	 * @param string $content Replaced content.
	 * @param array $data Replacement data.
	 * @param WC_Product $product Product object.
	 *
	 * @return string
	 */
	public static function filter_replaced_content( $content, $data, $product ) {
		return $content;
	}

	/**
	 * Before metabox content
	 */
	public static function before_metabox_content() {
		do_action( 'wcai_custom_before_metabox_content' );
	}

	/**
	 * After metabox content
	 */
	public static function after_metabox_content() {
		do_action( 'wcai_custom_after_metabox_content' );
	}

	/**
	 * Before prompt select
	 */
	public static function before_prompt_select() {
		do_action( 'wcai_custom_before_prompt_select' );
	}

	/**
	 * After prompt select
	 */
	public static function after_prompt_select() {
		do_action( 'wcai_custom_after_prompt_select' );
	}
}