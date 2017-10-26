<?php
include_once 'model/Godown.php';

class GodownController {

    public $model;

    public function __construct() {
        $this->model = new Godown;
    }
}

?>