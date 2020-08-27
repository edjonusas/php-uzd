<?php
declare(strict_types=1);

/**
 * generate tag attributes with values
 *
 * @param array $attrs
 * @return string
 */
function html_attr(array $attrs): string
{
    $output = [];

    foreach ($attrs as $key => $attr) {
        $output[] = "$key=\"$attr\"";
    }

    return implode(' ', $output);
}

/**
 * Generating new input field from given array
 *
 * @param string $field_id
 * @param array $field
 * @return string
 */
function input_attr(string $field_id, array $field): string
{
    $attributes = [
        'name' => $field_id,
        'type' => $field['type'],
        'value' => $field['value'] ?? ''
    ];
    $attributes += $field['extra']['attr'] ?? '';

    return html_attr($attributes);
}

/**
 * Generating new button from given array
 *
 * @param string $button_id
 * @param array $button
 * @return string
 */
function button_attr(string $button_id, array $button): string
{
    $attributes = [
        'name' => $button['title'],
        'value' => $button_id,
    ];
    $attributes += $button['extra']['attr'] ?? '';

    return html_attr($attributes);
}