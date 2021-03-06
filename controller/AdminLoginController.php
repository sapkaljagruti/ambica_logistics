<?php

@session_start();
include_once 'model/Admin.php';

class AdminLoginController {

    public $model;

    public function __construct() {
        $this->model = new Admin;
    }

    public function check() {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $hashed_password=  md5($password);
            $chk = $this->model->check_login($username, $hashed_password);
            if ($chk) {
                header("location:home.php");
//                require_once 'controller/BranchMasterController.php';
//                $obj = new BranchMasterController();
//                $obj->insert_record($branch_name, $branch_code, $address, $pincode, $state, $std_code, $phone1, $phone2, $phone3, $fax, $mobile, $manager, $email);
//                $obj->branches();
            } else {
                $out = "Not";
                include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/login.php';
            }
        } else {
            include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/login.php';
        }
    }

    public function logout() {
        session_destroy();
        session_unset();
        header('location: index.php');
    }

}

?>