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
            } elseif ($_GET["action"] == "del_accgroup") {
                if (isset($_GET['id'])) {
                    $accgroups_id = $_GET['id'];
                    $obj->del_accgroup($accgroups_id);
                }
            }
        }
    } elseif ($controller == "manager") {
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/controller/ManagerController.php';
        $obj = new ManagerController();

        if (isset($_GET["action"])) {
            if ($_GET["action"] == "managers") {
                $obj->view_manager();
            } elseif ($_GET["action"] == "add_manager") {
                $obj->insert_manager();
            } elseif ($_GET["action"] == "get_manager") {
                if (isset($_GET['id'])) {
                    $manager_id = $_GET['id'];
                    $obj->get_manager($manager_id);
                }
            } elseif ($_GET["action"] == "edit_manager") {
                if (isset($_GET['id'])) {
                    $manager_id = $_GET['id'];
                    $obj->upd_manager($manager_id);
                }
            } elseif ($_GET["action"] == "del_manager") {
                if (isset($_GET['id'])) {
                    $manager_id = $_GET['id'];
                    $obj->del_manager($manager_id);
                }
            }
        }
    } elseif ($controller == "packing") {
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/controller/PackingController.php';
        $obj = new PackingController();

        if (isset($_GET["action"])) {
            if ($_GET["action"] == "packings") {
                $obj->view_packing();
            } elseif ($_GET["action"] == "add_packing") {
                $obj->ins_packing();
            } elseif ($_GET["action"] == "get_packing") {
                if (isset($_GET['id'])) {
                    $packing_id = $_GET['id'];
                    $obj->get_packing($packing_id);
                }
            } elseif ($_GET["action"] == "edit_packing") {
                if (isset($_GET['id'])) {
                    $packing_id = $_GET['id'];
                    $obj->upd_packing($packing_id);
                }
            } elseif ($_GET["action"] == "del_packing") {
                if (isset($_GET['id'])) {
                    $packing_id = $_GET['id'];
                    $obj->del_packing($packing_id);
                }
            }
        }
    } elseif ($controller == "goods") {
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/controller/GoodsController.php';
        $obj = new GoodsController();

        if (isset($_GET["action"])) {
            if ($_GET["action"] == "goods_description") {
                $obj->view_goods();
            } elseif ($_GET["action"] == "add_goods") {
                $obj->insert();
            } elseif ($_GET["action"] == "get_goods") {
                if (isset($_GET['id'])) {
                    $goods_id = $_GET['id'];
                    $obj->get($goods_id);
                }
            } elseif ($_GET["action"] == "edit_goods") {
                if (isset($_GET['id'])) {
                    $goods_id = $_GET['id'];
                    $obj->upd($goods_id);
                }
            } elseif ($_GET["action"] == "del_goods") {
                if (isset($_GET['id'])) {
                    $goods_id = $_GET['id'];
                    $obj->del($goods_id);
                }
            }
        }
    } elseif ($controller == "ledger") {
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/controller/LedgerController.php';
        $obj = new LedgerController();

        if (isset($_GET["action"])) {
            if ($_GET["action"] == "ledgers") {
                $obj->view();
            } elseif ($_GET["action"] == "add_ledger") {
                $obj->ins();
            } elseif ($_GET["action"] == "get_ledger") {
                if (isset($_GET['id'])) {
                    $ledger_id = $_GET['id'];
                    $obj->get($ledger_id);
                }
            } elseif ($_GET["action"] == "edit_ledger") {
                if (isset($_GET['id'])) {
                    $ledger_id = $_GET['id'];
                    $obj->upd($ledger_id);
                }
            } elseif ($_GET["action"] == "del_ledger") {
                if (isset($_GET['id'])) {
                    $ledger_id = $_GET['id'];
                    $obj->del($ledger_id);
                }
            }
        }
    } elseif ($controller == "ins_co") {
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/controller/Ins_co_Controller.php';
        $obj = new Ins_co_Controller();

        if (isset($_GET["action"])) {
            if ($_GET["action"] == "ins_comp") {
                $obj->view();
            } elseif ($_GET["action"] == "add_ins_co") {
                $obj->ins();
            } elseif ($_GET["action"] == "get_ins_co") {
                if (isset($_GET['id'])) {
                    $insco_id = $_GET['id'];
                    $obj->get($insco_id);
                }
            } elseif ($_GET["action"] == "upd_ins_co") {
                if (isset($_GET['id'])) {
                    $insco_id = $_GET['id'];
                    $obj->upd($insco_id);
                }
            } elseif ($_GET["action"] == "del_ins_co") {
                if (isset($_GET['id'])) {
                    $insco_id = $_GET['id'];
                    $obj->del($insco_id);
                }
            }
        }
    } elseif ($controller == "insurance") {
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/controller/InsuranceController.php';
        $obj = new InsuranceController();

        if (isset($_GET["action"])) {
            if ($_GET["action"] == "insurances") {
                $obj->view();
            } elseif ($_GET["action"] == "add_insurance") {
                $obj->ins();
            } elseif ($_GET["action"] == "get_insurance") {
                if (isset($_GET["id"])) {
                    $ins_id = $_GET['id'];
                    $obj->get($ins_id);
                }
            } elseif ($_GET["action"] == "edit_insurance") {
                if (isset($_GET["id"])) {
                    $ins_id = $_GET['id'];
                    $obj->upd($ins_id);
                }
            } elseif ($_GET["action"] == "del_insurance") {
                if (isset($_GET["id"])) {
                    $ins_id = $_GET['id'];
                    $obj->del($ins_id);
                }
            }
        }
    }
} else {
    $view_file = 'home.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
}
?>
