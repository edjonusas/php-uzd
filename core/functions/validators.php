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
 * Validates form
 *
 * @param array $form
 * @param array $form_values
 * @return bool
 */
function validate_form(array &$form, array $form_values): bool
{
    $success = true;
    // input validator
    foreach ($form['fields'] as $key => &$field) {
        // go through validators array
        foreach ($field['validators'] ?? [] as $validator_key => $validator) {
            //check if validator is array
            if (is_array($validator)) {
                $function = $validator_key;
                $params = $validator;
            } else {
                $function = $validator;
            }

            if ($function($form_values[$key], $field, $params ?? null)) {
                $field['value'] = $form_values[$key];
            } else {
                $success = false;
                break;
            }
        }
    }
    //form validator
    foreach ($form['validators'] ?? [] as $form_validator_key => $form_validator) {
        if (is_array($form_validator)) {
            $form_validator_function = $form_validator_key;
            $form_validator_params = $form_validator;
        } else {
            $form_validator_function = $form_validator;
        }
        if (!$form_validator_function($form_values, $form, $form_validator_params ?? null)) {
            $success = false;
            break;
        }
    }

    return $success;
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


