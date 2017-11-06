<?php

include_once 'model/Ins_company.php';

class Ins_co_Controller {

    public $model;

    public function __construct() {
        $this->model = new Insurance_co;
    }

    public function view() {
        $ins_comp = $this->model->view();
        $view_file = "ins_co.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function ins() {
        if (isset($_POST["company_name"])) {
            $ins = $this->model->ins($_POST["company_name"]);

            if ($ins) {
                header("location:home.php?controller=ins_co&action=ins_comp");
            }
        }
        $ins_comp = $this->model->view();
        $view_file = "add_inscompany.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function get($insco_id) {
        $get = $this->model->get($insco_id);
        $view_file = 'edit_ins_co.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function upd($insco_id) {
        $get = $this->model->get($insco_id);
        if (isset($_POST["company_name"])) {
            $upd = $this->model->upd($insco_id, $_POST["company_name"]);

            if ($upd) {
                header("location:home.php?controller=ins_co&action=ins_comp");
            }
        }
        $ins_comp = $this->model->view();
        $view_file = "edit_ins_co.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';

        if (isset($_POST["company_name"])) {
            $view_file = "ins_co.php";
            include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
        }
    }

    public function del($insco_id) {
        $del = $this->model->del($insco_id);
        if ($del) {
            header("location:home.php?controller=ins_co&action=ins_comp");
        }
        $ins_comp = $this->model->view();
        $view_file = "ins_co.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

}

?>