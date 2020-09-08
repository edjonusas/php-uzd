<?php

///**
// * form validation
// *
// * @param $form
// * @param $form_values
// * @return bool
// */
//function validate_form(array &$form, array $form_values)
//{
//    $validate = [];
//    foreach ($form['fields'] as $key => &$field) {
//        $validate[$key] = validate_field_not_empty($form_values[$key], $field);
//    }
//    if (in_array(false, $validate)) {
//        return false;
//    } else {
//        return true;
//    }
//}

///**
// * empty input error message
// *
// * @param $field_value
// * @param $field
// * @return bool
// */
//function validate_field_not_empty($field_value, &$field)
//{
//    if ($field_value === '') {
//        $field['error'] = 'palikote tuscia laukeli';
//        return false;
//    } else {
//        $field['value'] = $field_value;
//        return true;
//    }
//}

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

///**
// * form validation
// *
// * @param $form
// * @param $form_values
// * @return bool
// */
//function validate_form(array &$form, array $form_values): bool
//{
//    $success = true;
//    foreach ($form['fields'] as $field_key => &$field) {
//        $field_value = $form_values[$field_key];
//        if (in_array('validate_field_not_empty', $field['validators'] ?? [])) {
//            if (validate_field_not_empty($field_value, $field)) {
//                $field['value'] = $field_value;
//            } else {
//                $success = false;
//            }
//        } elseif (in_array('validate_field_is_number', $field['validators'] ?? [])) {
//            if (validate_field_is_number($field_value, $field)) {
//                $field['value'] = $field_value;
//            } else {
//                $success = false;
//            }
//        }
//    }
//    return $success;
//}

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
        foreach ($field['validators'] as $validator_key => $validator) {
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
    foreach ($form['validators'] as $form_validator_key => $form_validator) {
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
        $form['error'] = 'vaziuojam';
        return true;
    } else {
        $form['error'] = 'nesutampa password';
        return false;
    }
//    if ($form_values[$params[0]] === $form_values[$params[1]]) {
//        $form['error'] = 'vaziuojam';
//        return true;
//    } else {
//        $form['error'] = 'nesutampa password';
//        return false;
//    }
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

//function validate_field_number_interval_50_100(string $field_value, array &$field): bool
//{
//    if ($field_value >= 50 && $field_value <= 100) {
//        $field['error'] = 'skiri';
//        return true;
//    } else {
//        $field['error'] = 'neskiri';
//    }
//}

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


