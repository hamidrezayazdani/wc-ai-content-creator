<?php
/**
 * Settings fields configuration
 *
 * @package WC_AI_Content_Creator
 */

defined( 'ABSPATH' ) || exit;

return apply_filters( 'wcai_settings_fields', array(
	array(
		'title' => __( 'AI Content Creator Settings', 'wc-ai-content-creator' ),
		'type'  => 'title',
		'desc'  => '',
		'id'    => 'wcai_settings',
	),
	array(
		'title'   => __( 'Product Title Prompt', 'wc-ai-content-creator' ),
		'desc'    => __( 'Enter the prompt for generating product titles', 'wc-ai-content-creator' ),
		'id'      => 'wcai_title_prompt',
		'type'    => 'textarea',
		'css'     => 'min-height: 100px;',
		'default' => '',
	),
	array(
		'title'   => __( 'Product Content Prompt', 'wc-ai-content-creator' ),
		'desc'    => __( 'Enter the prompt for generating product content', 'wc-ai-content-creator' ),
		'id'      => 'wcai_content_prompt',
		'type'    => 'textarea',
		'css'     => 'min-height: 100px;',
		'default' => '',
	),
	array(
		'title'   => __( 'Product Excerpt Prompt', 'wc-ai-content-creator' ),
		'desc'    => __( 'Enter the prompt for generating product excerpts', 'wc-ai-content-creator' ),
		'id'      => 'wcai_excerpt_prompt',
		'type'    => 'textarea',
		'css'     => 'min-height: 100px;',
		'default' => '',
	),
	array(
		'title'   => __( 'SEO Metadata Prompt', 'wc-ai-content-creator' ),
		'desc'    => __( 'Enter the prompt for generating SEO metadata (Yoast/RankMath)', 'wc-ai-content-creator' ),
		'id'      => 'wcai_metadata_prompt',
		'type'    => 'textarea',
		'css'     => 'min-height: 100px;',
		'default' => '',
	),
	array(
		'title'   => __( 'Product Attributes Prompt', 'wc-ai-content-creator' ),
		'desc'    => __( 'Enter the prompt for generating product attributes', 'wc-ai-content-creator' ),
		'id'      => 'wcai_attributes_prompt',
		'type'    => 'textarea',
		'css'     => 'min-height: 100px;',
		'default' => '',
	),
	array(
		'type' => 'sectionend',
		'id'   => 'wcai_settings',
	),
) );