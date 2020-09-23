<?php

namespace Core;

use App\App;

/**
 * class for authentication
 *
 * Class Session
 * @package Core
 */
class Session
{
    private ?array $user = null;

    public function __construct()
    {
        $this->loginFromCookie();
    }

    /**
     * @return bool
     */
    public function loginFromCookie(): bool
    {
        if (isset($_SESSION['user_name']) && isset($_SESSION['password'])) {
            $this->login($_SESSION['user_name'], $_SESSION['password']);
            return true;
        }

        return false;
    }

    /**
     * @param string $user_name
     * @param string $password
     * @return bool
     */
    public function login(string $user_name, string $password): bool
    {
        $user = App::$db->getRowWhere('users', ['user_name' => $user_name, 'password' => $password]);
        if ($user) {
            $_SESSION['user_name'] = $user_name;
            $_SESSION['password'] = $password;
            $this->user = $user;
            return true;
        }
        return false;
    }

    /**
     * @return array|null
     */
    public function getUser(): ?array
    {
        return $this->user;
    }

    /**
     * Logout user from site
     *
     * @param string|null $redirect
     */
    public function logout(string $redirect = null): void
    {
        setcookie('PHPSESSID', null, -1);
        session_destroy();
        $_SESSION = [];
        if ($redirect) {
            header("Location: $redirect");
            exit;
        }
    }
}