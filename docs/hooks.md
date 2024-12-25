# WooCommerce AI Content Creator Hooks

## Filters

### `wcai_settings_fields`
Filter the settings fields before they are registered.

```php
apply_filters('wcai_settings_fields', array $fields)
```

### `wcai_prompt_types`
Filter the available prompt types.

```php
apply_filters('wcai_prompt_types', array $types)
```

### `wcai_metabox_position`
Filter the metabox position ('normal', 'side', 'advanced').

```php
apply_filters('wcai_metabox_position', string $position)
```

### `wcai_metabox_priority`
Filter the metabox priority ('high', 'core', 'default', 'low').

```php
apply_filters('wcai_metabox_priority', string $priority)
```

### `wcai_replacement_data`
Filter the replacement data before processing.

```php
apply_filters('wcai_replacement_data', array $data, WC_Product $product)
```

### `wcai_replaced_content`
Filter the content after replacements are made.

```php
apply_filters('wcai_replaced_content', string $content, array $data, WC_Product $product)
```

## Actions

### `wcai_before_metabox_content`
Fires before the metabox content is displayed.

```php
do_action('wcai_before_metabox_content')
```

### `wcai_after_metabox_content`
Fires after the metabox content is displayed.

```php
do_action('wcai_after_metabox_content')
```

### `wcai_before_prompt_select`
Fires before the prompt select field.

```php
do_action('wcai_before_prompt_select')
```

### `wcai_after_prompt_select`
Fires after the prompt select field.

```php
do_action('wcai_after_prompt_select')
```

## Example Usage

```php
// Add custom prompt type
add_filter('wcai_prompt_types', function($types) {
    $types['custom'] = __('Custom Prompt', 'your-textdomain');
    return $types;
});

// Add custom replacement data
add_filter('wcai_replacement_data', function($data, $product) {
    $data['{custom_field}'] = $product->get_meta('_custom_field');
    return $data;
}, 10, 2);

// Add content before metabox
add_action('wcai_before_metabox_content', function() {
    echo '<div class="custom-notice">Custom notice</div>';
});
```