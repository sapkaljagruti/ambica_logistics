<?php

@session_start();

include_once 'model/Branch.php';

class BranchMasterController {

    public $model;

    public function __construct() {
        $this->model = new Branch;
    }

    public function branches() {
        $branches = $this->model->get_branches();
        $view_file = 'branches.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function get_branch($branch_id) {
        $branch = $this->model->get_branch($branch_id);
        return $branch;
    }

    public function insert_record($branch_name, $branch_code, $address, $pincode, $state, $std_code, $phone1, $phone2, $phone3, $fax, $mobile, $manager, $email) {

        $ins = $this->model->insert($branch_name, $branch_code, $address, $pincode, $state, $std_code, $phone1, $phone2, $phone3, $fax, $mobile, $manager, $email);
        if ($ins) {
            header("location:views/view.php");
        } else {
            echo "Not inserted";
        }
    }

    public function update($branch_id, $branch_name, $branch_code, $address, $pincode, $state, $std_code, $phone1, $phone2, $phone3, $fax, $mobile, $manager, $email) {
        $upd = $this->model->upd_branch($branch_id, $branch_name, $branch_code, $address, $pincode, $state, $std_code, $phone1, $phone2, $phone3, $fax, $mobile, $manager, $email);
        return $upd;
    }

    public function delete($branch_id) {
        $del = $this->model->del_branch($branch_id);
        return $del;
    }

}

?>
