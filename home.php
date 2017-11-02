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
    } elseif ($controller == "godown") {

        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/controller/GodownController.php';
        $obj = new GodownController();

        if (isset($_GET["action"])) {
            if ($_GET["action"] == "godowns") {
                $obj->godowns();
            } elseif ($_GET["action"] == "add_newgodown") {
                $obj->insert_record();
            } elseif ($_GET["action"] == "edit_godowns") {
                if (isset($_GET["id"])) {
                    $godown_id = $_GET["id"];
                    $obj->update_godown($godown_id);
                }
            } elseif ($_GET["action"] == "get_godown") {
                $obj->update_godown();
            } elseif ($_GET["action"] == "delete_godown") {
                if (isset($_GET['id'])) {
                    $godown_id = $_GET['id'];
                    $obj->delete($godown_id);
                }
            }
        }
    } elseif ($controller == "destination") {
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/controller/DestinationController.php';
        $obj = new DestinationController();

        if (isset($_GET["action"])) {
            if ($_GET["action"] == "destinations") {
                $obj->destinations();
            } elseif ($_GET["action"] == "add_destination") {
                $obj->add_destination();
            } elseif ($_GET["action"] == "edit_destination") {
                if (isset($_GET['id'])) {
                    $destination_id = $_GET['id'];
                    $obj->update($destination_id);
                }
            } elseif ($_GET["action"] == "get_destination") {
                if (isset($_GET['id'])) {
                    $destination_id = $_GET['id'];
                    $obj->get_destination($destination_id);
                }
            } elseif ($_GET["action"] == "delete_destination") {
                if (isset($_GET['id'])) {
                    $destination_id = $_GET['id'];
                    $obj->del($destination_id);
                }
            }
        }
    } elseif ($controller == "accountgroup") {
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/controller/AccountgroupController.php';
        $obj = new AccountgroupController();

        if (isset($_GET["action"])) {
            if ($_GET["action"] == "accountgroups") {
                $obj->view_accgroup();
            } elseif ($_GET["action"] == "add_accgroup") {
                $obj->ins_accgroup();
            } elseif ($_GET["action"] == "get_accgroup") {
                if (isset($_GET['id'])) {
                    $accgroups_id = $_GET['id'];
                    $obj->get_accgroup($accgroups_id);
                }
            } elseif ($_GET["action"] == "edit_accgroup") {
                if (isset($_GET['id'])) {
                    $accgroups_id = $_GET['id'];
                    $obj->upd_accgroup($accgroups_id);
                }
            } elseif($_GET["action"]=="del_accgroup"){
                if(isset($_GET['id'])){
                    $accgroups_id = $_GET['id'];
                    $obj->del_accgroup($accgroups_id);
                }
            }
        }
    }
} else {
    $view_file = 'home.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
}
?>
