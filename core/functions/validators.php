<?php

/**
 * empty input error message
 *
 * @param $field_value
 * @param $field
 * @return bool or null
 */
function validate_field_not_empty(string $field_value, array &$field)
{
    if ($field_value === '') {
        $field['error'] = 'Laukelis tuscias';
        return false;
    } else {
        return true;
    }
}

/**
 *  validate password match
 *
 * @param array $form_values
 * @param array $form
 * @param array $params
 * @return bool
 */
function validate_fields_match(array $form_values, array &$form, array $params): bool
{
    $values = [];
    foreach ($params as $param) {
        $values[] = $form_values[$param];
    }
    if (count(array_unique($values)) === 1) {
        return true;
    } else {
        $form['error'] = 'nesutampa password';
        return false;
    }

}


/**
 * is numeric input error message
 *
 * @param $field_value
 * @param $field
 * @return bool or null
 */
function validate_field_is_number(string $field_value, array &$field)
{
    if (is_numeric($field_value)) {
        return true;
    } else {
        $field['error'] = 'laukelio verte privalo buti skaicius';
        return false;
    }
}

/**
 * validate if number is in range
 *
 * @param string $field_value
 * @param array $field
 * @param array $params
 * @return bool
 */
function validate_field_range(string $field_value, array &$field, array $params): bool
{
    if (($field_value < $params['min']) || ($field_value > $params['max'])) {
        $field['error'] = strtr('Laukelio vertė turi būti @from iki @to', [
            '@from' => $params['min'],
            '@to' => $params['max']
        ]);
        return false;
    } else {
        return true;
    }
}

/**
 * validate selector value
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_selector_value(string $field_value, array &$field): bool
{
    foreach ($field['option'] as $value => $title) {
        if ($value === $field_value) {
            return true;
        }
    }

    return false;
}

/**
 *
 * @param string $field_value
 * @return bool or null
 */
function validate_field_string_gap(string $field_value): ?bool
{
    if (count(explode(' ', trim($field_value))) > 1) {
        return true;
    }
}


