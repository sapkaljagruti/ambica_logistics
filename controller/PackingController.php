<?php

include_once 'model/Packing.php';

class PackingController {

    public $model;

    public function __construct() {
        $this->model = new Packing;
    }

    public function view_packing() {
        $pack = $this->model->view_packing();
        $view_file = "packings.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function ins_packing() {
        if (isset($_POST['packing_type'])) {
            $ins = $this->model->ins_packing($_POST['packing_type']);
            if ($ins) {
                header("location:home.php?controller=packing&action=packings");
            }
        }
        $pack = $this->model->view_packing();
        $view_file = 'add_packing.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function get_packing($packing_id) {
        $get = $this->model->get_packing($packing_id);
        $view_file = 'edit_packing.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function upd_packing($packing_id) {
        $get = $this->model->get_packing($packing_id);
        if (isset($_POST['packing_type'])) {
            $upd = $this->model->upd_packing($packing_id, $_POST['packing_type']);
            if ($upd) {
                header("location:home.php?controller=packing&action=packings");
            }
        }$pack = $this->model->view_packing();
        $view_file = 'edit_packing.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';

        if (isset($_POST['packing_type'])) {
            $view_file = "packings.php";
            include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
        }
    }

    public function del_packing($packing_id) {
        $del = $this->model->del_packing($packing_id);
        if ($del) {
            header("location:home.php?controller=packing&action=packings");
        }
        $pack = $this->model->view_packing();
        $view_file = "packings.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

}

?>