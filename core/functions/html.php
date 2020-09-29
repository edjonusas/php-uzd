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
 * Generating input field from given array
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
    $attributes += $field['extra']['attr'] ?? [];

    return html_attr($attributes);
}

/**
 * Generating button from given array
 *
 * @param string $button_id
 * @param array $button
 * @return string
 */
function button_attr(string $button_id, array $button): string
{
    $attributes = [
        'name' => 'action',
        'value' => $button_id,
    ];
    $attributes += $button['extra']['attr'] ?? [];

    return html_attr($attributes);
}

/**
 * Generating select tag attributes from given array
 *
 * @param string $field_id
 * @param array $field
 * @return string
 */
function select_attr(string $field_id, array $field): string
{
    $attributes = [
        'name' => $field_id,
    ];
    $attributes += $field['extra']['attr'] ?? [];
    return html_attr($attributes);
}

function range_attr(string $field_id, array $field): string
{
    $attributes = [
        'name' => $field_id,
        'type' => $field['type'],
        'value' => $field['value'] ?? '',
        'min' => $field['min_value'],
        'max' => $field['max_value'],
    ];
    $attributes += $field['extra']['attr'] ?? [];

    return html_attr($attributes);
}

/**
 * Generating option tag
 *
 * @param string $option_id
 * @param array $field
 * @return string
 */
function option_attr(string $option_id, array $field): string
{
    $option = $field['option'][$option_id];
    $attributes = [
        'value' => $option_id,
    ];

    if ($field['value'] == $option_id) $attributes['selected'] = true;
    if (is_array($option)) $attributes += $option['attr'];

    return html_attr($attributes);
}

/**
 * sanitize array keys from form
 *
 * @param array $form
 * @return array
 */
function sanitize_form_input_values(array $form): array
{
    $filter_parameters = [];
    foreach ($form['fields'] as $key => $field) {
        $filter_parameters[$key] = $field['filter'] ?? FILTER_SANITIZE_SPECIAL_CHARS;
    }
    return filter_input_array(INPUT_POST, $filter_parameters);
}

/**
 * create array for table template
 *
 * @param array $data_array
 * @param array $headers
 * @return array
 */
function create_table_array(array $data_array, array $headers): array
{
    $table = [];
    foreach ($headers as $header) {
        $table['headers'][] = $header ?? '';
    }

    foreach ($data_array as $col) {
        $table['rows'][] = $col;
    }

    return $table;
}
