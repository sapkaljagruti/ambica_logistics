<?php

if ($_GET["controller"]) {
    $controller = $_GET["controller"];
    if ($controller == "branch") {
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/BranchMasterController.php';
        $obj = new BranchMasterController();

        if ($_GET["action"]) {
            if ($_GET["action"] == "branches") {
                $obj->branches();
            }
        }
    }
} else {
    include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/home.php';
}
?>
