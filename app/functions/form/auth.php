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