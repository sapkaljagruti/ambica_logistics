<?php

include_once 'model/Courier.php';


class CourierController {

    public $model;

    public function __construct() {
        $this->model = new Courier;
    }

    public function view() {
        $courier = $this->model->view();
        $view_file = "couriers.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function ins() {
        if (isset($_POST["company_name"])) {
            $ins = $this->model->ins($_POST["company_name"]);

            if ($ins) {
                header("location:home.php?controller=courier&action=couriers");
            }
        }
        
        $courier = $this->model->view();
        $view_file = "add_couriermaster.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function get($cour_id) {
        $get = $this->model->get($cour_id);
        $view_file = 'edit_courier.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function upd($cour_id) {
        $get = $this->model->get($cour_id);
        if (isset($_POST["company_name"])) {
            $upd = $this->model->upd($cour_id, $_POST["company_name"]);

            if ($upd) {
                header("location:home.php?controller=courier&action=couriers");
            }
        }
        $view_file = "edit_courier.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';

        if (isset($_POST["company_name"])) {
            $view_file = "couriers.php";
            include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
        }
    }

    public function del($cour_id) {
        $del = $this->model->del($cour_id);
        if ($del) {
            header("location:home.php?controller=courier&action=couriers");
        }
        $courier = $this->model->view();
        $view_file = "couriers.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

}


