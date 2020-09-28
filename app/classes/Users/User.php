<?php

namespace App\Users;

use Core\DataHolder\DataHolder;

class User extends DataHolder
{
    protected array $properties = ['user_name', 'password'];

    public function setUserName(?string $user_name)
    {
        $this->data['user_name'] = $user_name;
    }

    public function getUserName(): ?string
    {
        return $this->data['user_name'] ?? null;
    }

    public function setPassword(?string $password)
    {
        $this->data['password'] = $password;
    }

    public function getPassword(): ?string
    {
        return $this->data['password'] ?? null;
    }
}