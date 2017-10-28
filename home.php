<?php

if (isset($_GET["controller"])) {
    $controller = $_GET["controller"];
    if ($controller == "branch") {
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/controller/BranchMasterController.php';
        $obj = new BranchMasterController();

        if (isset($_GET["action"])) {
            if ($_GET["action"] == "branches") {
                $obj->branches();
            } elseif ($_GET["action"] == "add_newbranch") {
                $obj->insert_record();
            } elseif ($_GET["action"] == "edit_branch") {
                if (isset($_GET["id"])) {
                    $branch_id = $_GET["id"];
                    $obj->update($branch_id);
                }
            } elseif ($_GET["action"] == "get_branch") {
                $obj->update();
            } elseif ($_GET["action"] == "delete_branch") {
                if (isset($_GET['id'])) {
                    $branch_id = $_GET['id'];
                    $obj->delete($branch_id);
                }
            }
        }
    }
} else {
    $view_file = 'home.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
}
?>
