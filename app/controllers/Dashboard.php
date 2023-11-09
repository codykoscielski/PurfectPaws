<?php

class Dashboard extends Controller {

    public function __construct() {

    }

    public function index(): void {
        $this->view('dashboard/dashboard');
    }
}