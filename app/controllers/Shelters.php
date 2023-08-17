<?php

#[AllowDynamicProperties]
class Shelters extends Controller {

    public function __construct() {

    }

    public function index(): void {
        $this->view('shelters/dashboard');
    }

    public function applications(): void {
        $this->view('shelters/applications');
    }

    public function reports(): void {
        $this->view('shelters/reports');
    }

    public function pets(): void {
        $this->view('shelters/pets');
    }

    public function addNewRescue(): void {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            //do add a pet
        } else {
            $this->view('shelters/addRescue');
        }
    }

}