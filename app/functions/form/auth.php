<?php

/**
 * Logout user from site
 *
 * @param false $redirect
 */
function logout($redirect = false)
{
    setcookie('PHPSESSID', null, -1);
    session_destroy();
    $_SESSION = [];
    if ($redirect) {
        header('Location: login.php');
        exit;
    }
}

/**
 * is user logged in
 *
 * @return bool
 */
function is_logged_in(): bool
{
    if (isset($_SESSION['user_name']) && isset($_SESSION['password'])) {
        if (App\App::$db->getRowsWhere('users', ['user_name' => $_SESSION['user_name'], 'password' => $_SESSION['password']])) {
            return true;
        }
    }

    return false;
}