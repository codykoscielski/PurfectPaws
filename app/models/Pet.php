<?php
    class Pet {
        private $db;

        public function __construct() {
            $this->db = new Database();
        }

        public function getAllCats() {
            $this->db->query('SELECT * FROM cats');
            return $this->db->resultSet();
        }

    }