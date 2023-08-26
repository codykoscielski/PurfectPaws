<?php

    class Shelter {

        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getAllBreeds(): array {
            $this->db->query('SELECT id, breed_name FROM breeds');
            return $this->db->resultSet();
        }
    }