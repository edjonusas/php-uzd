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
    $db = new FileDB(DB_FILE);
    $db->load();
    $user = ['user_name' => $field_value];
    if ($db->getRowsWhere('users', $user)) {
        $field['error'] = "User $field_value already registered";
        return false;
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
    $db = new FileDB(DB_FILE);
    $db->load();
    if ($db->getRowsWhere('users', $form_values)) {
        return true;
    }
    $form['error'] = 'neapvyko!';
    return false;
}

function is_logged()
{
    $data_arr = file_to_array(DB_FILE);
    foreach ($data_arr as $data) {
        if ($data['user_name'] === $_SESSION['user_name'] ?? '' && $data['password'] === $_SESSION['password'] ?? '') {
            return true;
        }
    }
    return false;
}