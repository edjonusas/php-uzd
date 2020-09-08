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
        if ($value['email'] === $field_value) {
            $field['error'] = "User $field_value already registered";
            return false;
        }
    }
    return true;
}