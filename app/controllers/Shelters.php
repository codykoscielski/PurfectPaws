<?php

#[AllowDynamicProperties]
class Shelters extends Controller {

    public function __construct() {
        $this->petModel = $this->model('Pet');
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
        $pets = $this->petModel->getAllCats();
        $data = [
            'cats' => $pets
        ];
        $this->view('shelters/pets', $data);
    }

    public function addNewRescue(): void {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            //do add a pet
        } else {
            $this->view('shelters/addRescue');
        }
    }

}