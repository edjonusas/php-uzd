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
 * @return bool
 */
function validate_field_not_empty(string $field_value, array &$field): bool
{
    if ($field_value === '') {
        $field['error'] = 'Laukelis tuscias';
        return false;
    } else {
        return true;
    }
}

/**
 * form validation
 *
 * @param $form
 * @param $form_values
 * @return bool
 */
function validate_form(array &$form, array $form_values): bool
{
    $success = true;
    foreach ($form['fields'] as $field_key => &$field) {
        $field_value = $form_values[$field_key];
        if (in_array('validate_field_not_empty', $field['validators'] ?? [])) {
            if (validate_field_not_empty($field_value, $field)) {
                $field['value'] = $field_value;
            } else {
                $success = false;
            }
        } elseif (in_array('validate_field_is_number', $field['validators'] ?? [])) {
            if (validate_field_is_number($field_value, $field)) {
                $field['value'] = $field_value;
            } else {
                $success = false;
            }
        }
    }
    return $success;
}

/**
 * is numeric input error message
 *
 * @param $field_value
 * @param $field
 * @return bool
 */
function validate_field_is_number(string $field_value, array &$field): bool
{
    if (is_numeric($field_value)) {
        return true;
    } else {
        $field['error'] = 'laukelio verte privalo buti skaicius';
        return false;
    }
}