<?php

include_once 'model/Manager.php';

class ManagerController {

    public $model;

    public function __construct() {
        $this->model = new Manager;
    }

    public function view_manager() {
        $view_manager = $this->model->view_manager();
        $view_file = "managers.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function insert_manager() {
        if (isset($_POST['name'])) {
            $ins = $this->model->ins_manager($_POST['name'], $_POST['email'], $_POST['mobile1'], $_POST['mobile2']);

            if ($ins) {
                header("location:home.php?controller=manager&action=managers");
            }
        }
        $view_file = "add_managers.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function get_manager($manager_id) {
        $get = $this->model->get_manager($manager_id);
        $view_file = "edit_manager.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function upd_manager($manager_id) {
        $get = $this->model->get_manager($manager_id);
        if (isset($_POST['name'])) {
            $upd = $this->model->upd_manager($manager_id, $_POST['name'], $_POST['email'], $_POST['mobile1'], $_POST['mobile2']);

            if ($upd) {
                header("location:home.php?controller=manager&action=managers");
            }
        }
        $view_file = 'edit_manager.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
        if (isset($_POST['name'])) {
            $view_file = 'managers.php';
            include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
        }
    }
    
    public function del_manager($manager_id) {
        $del = $this->model->del_manager($manager_id);
        if ($del) {
            header("location:home.php?controller=manager&action=managers");
        }
        $view_manager = $this->model->view_manager();
        $view_file = "managers.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

}

?>