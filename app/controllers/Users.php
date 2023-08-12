<?php

#[AllowDynamicProperties]
class Users extends Controller {

    public function __construct() {

    }

    public function login(): void {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Do something here
        } else {
            //Load the view
            $this->view('users/login');
        }

    }

    public function register(): void {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Create the account
        } else {
            //Load thew view
            $this->view('users/register');
        }
    }
}