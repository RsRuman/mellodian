<?php

require_once 'models/User.php';

#[AllowDynamicProperties]
class UserController
{
    public  function __construct() {
        $this->user = new User();
    }

    public function index() : void
    {
        $users = $this->user->getAllUsers();
        include 'views/admin/users.php';
    }
}