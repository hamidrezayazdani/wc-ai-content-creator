<?php
/**
 * Replacements sidebar template
 *
 * @package WC_AI_Content_Creator
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="wcai-settings-sidebar">
    <div class="wcai-settings-replacements">
        <h3><?php esc_html_e( 'Available Replacements', 'wc-ai-content-creator' ); ?></h3>
        <p class="description"><?php esc_html_e( 'Click on any replacement to copy it to clipboard.', 'wc-ai-content-creator' ); ?></p>
        <div class="wcai-replacements-grid">
            <kbd data-replacement="{product_title}">{product_title}</kbd>
            <kbd data-replacement="{current_title}">{current_title}</kbd>
            <kbd data-replacement="{current_content}">{current_content}</kbd>
            <kbd data-replacement="{current_excerpt}">{current_excerpt}</kbd>
            <kbd data-replacement="{SKU}">{SKU}</kbd>
            <kbd data-replacement="{GTIN}">{GTIN}</kbd>
            <kbd data-replacement="{UPC}">{UPC}</kbd>
            <kbd data-replacement="{EAN}">{EAN}</kbd>
            <kbd data-replacement="{ISBN}">{ISBN}</kbd>
        </div>
    </div>
</div>