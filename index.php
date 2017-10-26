
<?php

//echo md5("lakhansen");
//exit();
@session_start();

if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    include_once 'controller/AdminLoginController.php';
    $obj = new AdminLoginController();
    $obj->logout();
} else {
    if (isset($_SESSION['username'])) {
        require_once 'controller/BranchMasterController.php';
        $obj = new BranchMasterController();
        $obj->branches();
    } else {
        include_once 'controller/AdminLoginController.php';
        $obj = new AdminLoginController();
        $obj->check();
    }
}




