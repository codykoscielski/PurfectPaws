<?php

#[AllowDynamicProperties]
class Users extends Controller {

    public function __construct() {

    }

    public function login() {
        $this->view('users/login');
    }
}