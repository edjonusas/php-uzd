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
 * is pixel position x and y  exists in DB_FILE
 *
 * @param array $form_values
 * @param array $form
 * @return bool
 */
function validate_pixel_unique_position(array $form_values, array &$form): bool
{
    unset($form_values['colour']);

    $db = new FileDB(DB_FILE);
    $db->load();

    if ($db->getRowsWhere('pixels', $form_values)) {
        $form['error'] = "Pixel already in this position";
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

/**
 * is user logged in
 *
 * @return bool
 */
function is_logged_in(): bool
{
    if (isset($_SESSION['user_name']) && isset($_SESSION['password'])) {
        $db = new FileDB(DB_FILE);
        $db->load();
        if ($db->getRowsWhere('users', ['user_name' => $_SESSION['user_name'], 'password' => $_SESSION['password']])) {
            return true;
        }
    }

    return false;
}