<?php

include_once 'model/Godown.php';
include_once 'model/Branch.php';

class GodownController {

    public $model;
    public $branch_model;

    public function __construct() {
        $this->model = new Godown;
        $this->branch_model= new Branch;
    }

    public function godowns() {
        $godowns = $this->model->view_godown();
        $view_file = 'godowns.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function insert_record() {

        if (isset($_POST['code'])) {

            $ins = $this->model->insert($_POST['godown_name'], $_POST['code'], $_POST['branch_id'], $_POST['address'], $_POST['phone_no'], $_POST['email_id']);

            if ($ins) {
                header("location:home.php?controller=godown&action=godowns");
            }
        }
        $branches = $this->branch_model->get_branches();
        $view_file = 'add_godownmaster.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function get_godown($godown_id) {
        $branches = $this->branch_model->get_branches();
        $godown = $this->model->get_godown($godown_id);
        $view_file = 'edit_godowns.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

//    public function update_godown($godown_id) {
//        $godown = $this->model->get_godown($godown_id);
//        if (isset($_POST['code'])) {
//            $upd = $this->model->upd_godown($godown_id, $_POST['godown_name'], $_POST['code'], $_POST['branch_id'], $_POST['address'], $_POST['phone_no'], $_POST['email_id']);
//            if ($upd) {
//                header("location:home.php?controller=godown&action=godowns");
//            }
//            $view_file = 'edit_godowns.php';
//            include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
//            if (isset($_POST['code'])) {
//                $view_file = 'godowns.php';
//                include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
//            }
//        }
//    }

    public function delete($godown_id) {
        $del = $this->model->del_godown($godown_id);
        if ($del) {
            header("location:home.php?controller=godown&action=godowns");
        }
        $godowns = $this->model->view_godown();
        $view_file = 'godowns.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

}

?>