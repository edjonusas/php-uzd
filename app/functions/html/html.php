<?php

function generate_nav(): array
{
    $nav = [
        'home' => [
            'url' => '/index.php',
            'title' => 'Home'
        ],
    ];

    if (is_logged_in()) {
        $nav[] = ['url' => '/pages/add.php', 'title' => 'Add'];
        $nav[] = ['url' => '/pages/my.php', 'title' => 'My pixels'];
        $nav[] = ['url' => '/pages/logout.php', 'title' => 'Logout'];
    } else {
        $nav[] = ['url' => '/pages/register.php', 'title' => 'Register'];
        $nav[] = ['url' => '/pages/login.php', 'title' => 'Login'];
    }

    return $nav;
}