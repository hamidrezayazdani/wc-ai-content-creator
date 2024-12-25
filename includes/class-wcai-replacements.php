<?php
/**
 * Replacements Handler
 *
 * @package WC_AI_Content_Creator
 */

defined( 'ABSPATH' ) || exit;

/**
 * Replacements handler class
 */
class WCAI_Replacements {
	/**
	 * Get replacement data for a product
	 *
	 * @param WC_Product $product Product object.
	 *
	 * @return array
	 */
	public static function get_replacement_data( $product ) {
		$data = array(
			'product_title'   => $product->get_name(),
			'current_title'   => $product->get_name(),
			'current_content' => $product->get_description(),
			'current_excerpt' => $product->get_short_description(),
			'sku'             => $product->get_sku(),
			'gtin'            => $product->get_meta( '_gtin' ),
			'upc'             => $product->get_meta( '_upc' ),
			'ean'             => $product->get_meta( '_ean' ),
			'isbn'            => $product->get_meta( '_isbn' ),
		);

		return apply_filters( 'wcai_replacement_data', $data, $product );
	}

	/**
	 * Replace placeholders in content
	 *
	 * @param string $content Content with placeholders.
	 * @param array $data Replacement data.
	 * @param WC_Product $product Product object.
	 *
	 * @return string
	 */
	public static function replace_placeholders( $content, $data, $product ) {
		foreach ( $data as $key => $value ) {
			$content = str_replace( '{' . $key . '}', $value, $content );
		}

		return apply_filters( 'wcai_replaced_content', $content, $data, $product );
	}
}