
<?php

@session_start();

if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    include_once 'controller/AdminLoginController.php';
    $obj = new AdminLoginController();
    $obj->logout();
} else {
    if (isset($_SESSION['username'])) {
        header("location:home.php");
    } else {
        include_once 'controller/AdminLoginController.php';
        $obj = new AdminLoginController();
        $obj->check();
    }
}




