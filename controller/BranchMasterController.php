<?php

@session_start();

include_once 'model/Branch.php';
include_once 'model/Manager.php';

class BranchMasterController {

    public $model;
    public $manager_model;

    public function __construct() {
        $this->model = new Branch;
        $this->manager_model = new Manager;
    }

    public function branches() {
        $branches = $this->model->get_branches();
        $view_file = 'branches.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function get_branch($branch_id) {
        $branch = $this->model->get_branch($branch_id);
        $view_file = 'edit_branch.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function insert_record() {

        if (isset($_POST['email'])) {

            $ins = $this->model->insert($_POST['branch_name'], $_POST['branch_code'], $_POST['address'], $_POST['pincode'], $_POST['state'], $_POST['phone1'], $_POST['fax'], $_POST['mobile'], $_POST['mobile2'], $_POST['manager_id'], $_POST['email']);
            if ($ins) {
                header("location:home.php?controller=branch&action=branches");
            }
        }
        $view_manager = $this->manager_model->view_manager();
        $view_file = 'add_branchmaster.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function update($branch_id) {
        $branch = $this->model->get_branch($branch_id);
        if (isset($_POST['email'])) {
            $upd = $this->model->upd_branch($branch_id, $_POST['branch_name'], $_POST['branch_code'], $_POST['address'], $_POST['pincode'], $_POST['state'], $_POST['phone1'], $_POST['fax'], $_POST['mobile'], $_POST['mobile2'], $_POST['manager_id'], $_POST['email']);
            if ($upd) {
                header("location:home.php?controller=branch&action=branches");
            }
        }
        $view_manager = $this->manager_model->view_manager();
        $view_file = 'edit_branch.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
        if (isset($_POST['email'])) {
            $view_file = 'branches.php';
            include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
        }
    }

    public function delete($branch_id) {
        $del = $this->model->del_branch($branch_id);
        if ($del) {
            header("location:home.php?controller=branch&action=branches");
        }
        $branches = $this->model->get_branches();
        $view_file = 'branches.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

}

?>
