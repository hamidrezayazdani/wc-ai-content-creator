<?php
/**
 * Product metabox template
 *
 * @package WC_AI_Content_Creator
 */

defined( 'ABSPATH' ) || exit;

$prompts = apply_filters( 'wcai_prompt_types', array(
	'title'      => get_option( 'wcai_title_prompt' ),
	'content'    => get_option( 'wcai_content_prompt' ),
	'excerpt'    => get_option( 'wcai_excerpt_prompt' ),
	'metadata'   => get_option( 'wcai_metadata_prompt' ),
	'attributes' => get_option( 'wcai_attributes_prompt' ),
) );

$product = wc_get_product( get_the_ID() );
?>

<div class="wcai-metabox">
    <div class="wcai-main-content">
		<?php do_action( 'wcai_before_metabox_content' ); ?>

        <div class="wcai-prompt-select">
			<?php do_action( 'wcai_before_prompt_select' ); ?>

            <label for="wcai_prompt_type"><?php esc_html_e( 'Select Prompt Type', 'wc-ai-content-creator' ); ?></label>
            <select id="wcai_prompt_type">
                <option value=""><?php esc_html_e( 'Select a prompt...', 'wc-ai-content-creator' ); ?></option>
				<?php foreach ( $prompts as $key => $prompt ) : ?>
                    <option value="<?php echo esc_attr( $key ); ?>">
						<?php echo esc_html( ucfirst( $key ) ); ?>
                    </option>
				<?php endforeach; ?>
            </select>

			<?php do_action( 'wcai_after_prompt_select' ); ?>
        </div>

        <div class="wcai-prompt-content">
            <label for="wcai_prompt_content"><?php esc_html_e( 'Generated Content', 'wc-ai-content-creator' ); ?></label>
            <textarea id="wcai_prompt_content" rows="5"></textarea>
        </div>

        <div class="wcai-actions">
            <button type="button" class="button wcai-copy-button">
				<?php esc_html_e( 'Copy', 'wc-ai-content-creator' ); ?>
            </button>
        </div>

		<?php do_action( 'wcai_after_metabox_content' ); ?>
    </div>
</div>

<script type="text/template" id="wcai_product_data">
	<?php
	$replacement_data = apply_filters( 'wcai_replacement_data', array(
		'product_title'   => $product->get_name(),
		'current_title'   => $product->get_name(),
		'current_content' => $product->get_description(),
		'current_excerpt' => $product->get_short_description(),
		'sku'             => $product->get_sku(),
		'gtin'            => $product->get_meta( '_gtin' ),
		'upc'             => $product->get_meta( '_upc' ),
		'ean'             => $product->get_meta( '_ean' ),
		'isbn'            => $product->get_meta( '_isbn' ),
	), $product );

	echo wp_json_encode( $replacement_data );
	?>
</script>