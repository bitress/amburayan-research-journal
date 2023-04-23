<?php

class User
{

    private Database $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function isLoggedIn() {
        if (Session::check('isLoggedIn')){
            return true;
        }
        return false;
    }



}