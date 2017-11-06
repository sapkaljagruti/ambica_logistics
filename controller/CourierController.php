<?php

include_once 'model/Insurance.php';
include_once 'model/Ins_company.php';

class InsuranceController {

    public $model;

    public function __construct() {
        $this->model = new Insurance;
        $this->ins_company_model = new Insurance_co;
    }

    public function view() {
        $insurance = $this->model->view();
        $view_file = "couriers.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function ins() {
        if (isset($_POST["company_id"])) {
            $ins = $this->model->ins($_POST["company_id"]);

            if ($ins) {
                header("location:home.php?controller=insurance&action=insurances");
            }
        }
        $ins_comp = $this->ins_company_model->view();
        $insurance = $this->model->view();
        $view_file = "add_insurance.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function get($ins_id) {
        $get = $this->model->get($ins_id);
        $view_file = 'edit_insurance.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function upd($ins_id) {
        $get = $this->model->get($ins_id);
        if (isset($_POST["company_id"])) {
            $upd = $this->model->upd($ins_id, $_POST["company_id"]);

            if ($upd) {
                header("location:home.php?controller=insurance&action=insurances");
            }
        }
        $ins_comp = $this->ins_company_model->view();
        $view_file = "edit_insurance.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';

        if (isset($_POST["company_id"])) {
            $view_file = "insurances.php";
            include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
        }
    }

    public function del($ins_id) {
        $del = $this->model->del($ins_id);
        if ($del) {
            header("location:home.php?controller=insurance&action=insurances");
        }
        $insurance = $this->model->view();
        $view_file = "insurances.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

}


