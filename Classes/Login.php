<?php

class Login
{
    public $id;
    public $first_name;
    public $lats_name;
    public $email;
    public $role;
    public $password;
    public $img;
    public function __construct()
    {
        settype($this->id, 'integer');
    }
}