<?php

namespace App\Abstracts;

use App\App;

abstract class UserController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!App::$session->getUser()) {
            header('Location: login.php');
        }
    }
}