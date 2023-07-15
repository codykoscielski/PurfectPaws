<?php
    class Pets extends Controller {
        public function __construct() {

        }

        public function index() {
            $this->view('pets/index');
        }
    }