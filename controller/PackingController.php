<?php

include_once 'model/Packing.php';

class PackingController {

    public $model;

    public function __construct() {
        $this->model = new Packing;
    }

    public function view_packing() {
        $pack=  $this->model->view_packing();
        $view_file="packings.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }
     public function ins_packing() {
        if (isset($_POST['packing_type'])) {
            $ins = $this->model->ins_packing($_POST['packing_type']);
            if ($ins) {
                header("location:home.php?controller=packing&action=packings");
            }
        }
        $pack=  $this->model->view_packing();
        $view_file = 'add_packing.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }
    
    public function get_packing($packing_id) {
        $get=  $this->model->get_packing($packing_id);
        $view_file = 'edit_packing.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

}

?>