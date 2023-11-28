<?php

class Dashboard extends Controller {

    public function __construct() {

    }

    public function index(): void {
        $this->view('dashboard/dashboard');
    }

    public function rescues(): void {
        $this->view('dashboard/all-rescues');
    }

    public function adoptions(): void {
        $this->view('dashboard/adoptions');
    }

    public function addrescue(): void {
        $this->view('dashboard/add-rescue');
    }
}