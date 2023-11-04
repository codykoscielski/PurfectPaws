<?php
    class Pages extends Controller {
        public function __construct() {

        }
        public function index(): void{
            $this->view('pages/index', $data);
        }

        public function about(): void {
            $this->view('pages/about');
        }

    }