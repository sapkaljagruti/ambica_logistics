<?php

include_once 'model/AccountGroup.php';

class AccountgroupController {

    public $model;

    public function __construct() {
        $this->model = new Accountgroup;
    }

    public function view_accgroup() {
        $accgroup = $this->model->view_accgroups();
        $view_file = "accountgroups.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function ins_accgroup() {
        if (isset($_POST['name'])) {
            $ins = $this->model->insert_accgroups($_POST['parent_id'], $_POST['name']);
            if ($ins) {
                header("location:home.php?controller=accountgroup&action=accountgroups");
            }
        }
        $accgroup = $this->model->view_accgroups();
        $view_file = 'add_accgroups.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function get_accgroup($accgroups_id) {
//        $accgroup=$this->model->view_accgroups();
        $acc = $this->model->get_accgroups($accgroups_id);
        $view_file = "accountgroups.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function upd_accgroup($accgroups_id) {
        $acc = $this->model->get_accgroups($accgroups_id);
        if (isset($_POST['name'])) {
            $up = $this->model->upd_accgroups($accgroups_id, $_POST['name'], $_POST['parent_id']);
            if ($up) {
                header("location:home.php?controller=accountgroup&action=accountgroups");
            }
        }
        $accgroup = $this->model->view_accgroups();
        $view_file = 'edit_accgroup.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
        if (isset($_POST['name'])) {
            $view_file = 'accountgroups.php';
            include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
        }
    }

    public function del_accgroup($accgroups_id) {
        $del = $this->model->del_accgroups($accgroups_id);
        if($del)
        {
            header("location:home.php?controller=accountgroup&action=accountgroups");
        }
        $accgroup = $this->model->view_accgroups();
        $view_file = "accountgroups.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

}

?>
