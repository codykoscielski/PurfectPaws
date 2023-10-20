<?php

#[AllowDynamicProperties]
class Shelters extends Controller {

    public function __construct() {
        $this->shelterModel = $this->model('Shelter');
    }
}