<?php

/**
 * is user exists in DB_FILE
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_user_unique(string $field_value, array &$field): bool
{
    $data_arr = file_to_array(DB_FILE);
    foreach ($data_arr as $key => $value) {
        if ($value['user_name'] === $field_value) {
            $field['error'] = "User $field_value already registered";
            return false;
        }
    }
    return true;
}

/**
 * checking if email and password match db_file data
 *
 * @param array $form_values
 * @param array $form
 * @return bool
 */
function validate_login(array $form_values, array &$form): bool
{
    $data_arr = file_to_array(DB_FILE);
    foreach ($data_arr as $value) {
        if ($value['user_name'] === $form_values['user_name'] && $value['password'] === $form_values['password']) {
            $form['error'] = "Sėkmingai prisijungta!";
            return true;
        }
    }
    $form['error'] = "Neprisijungta";
    return false;
}