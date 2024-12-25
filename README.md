# WooCommerce AI Content Creator

A WordPress plugin that adds AI content generation capabilities to WooCommerce products with customizable prompts.

## Features

- Adds an "AI Content Creator" tab to WooCommerce settings
- Customizable prompts for:
  - Product titles
  - Product content
  - Product excerpts
  - SEO metadata (Yoast/RankMath)
  - Product attributes
- Dynamic placeholder replacements
- RTL support
- Translation ready
- Modern copy-to-clipboard functionality
- Beautiful animations and styles

## Requirements

- WordPress 5.8 or higher
- WooCommerce 5.0.0 or higher
- PHP 7.4 or higher

## Installation

1. Upload the plugin files to the `/wp-content/plugins/wc-ai-content-creator` directory
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Configure the prompts in WooCommerce → Settings → AI Content Creator

## Available Placeholders

The following placeholders can be used in your prompts:

- `{product_title}` - Current product title
- `{sku}` - Product SKU
- `{current_title}` - Current product title
- `{current_content}` - Current product content
- `{current_excerpt}` - Current product excerpt
- `{gtin}` - Product GTIN
- `{UPC}` - Product UPC
- `{EAN}` - Product EAN
- `{ISBN}` - Product ISBN

## Development

### Building from Source

1. Clone the repository
2. Install dependencies: `composer install`
3. Run build process: `npm run build`

### Contributing

1. Fork the repository
2. Create your feature branch: `git checkout -b feature/my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin feature/my-new-feature`
5. Submit a pull request

## License

This project is licensed under the GPL v2 or later - see the [LICENSE](LICENSE) file for details.

## Author

HamidReza Yazdani
- GitHub: [https://github.com/hamidrezayazdani](https://github.com/hamidrezayazdani)