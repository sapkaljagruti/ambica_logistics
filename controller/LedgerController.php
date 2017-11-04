<?php

include_once 'model/Ledger.php';
include_once 'model/Accountgroup.php';

class LedgerController {

    public $model;

    public function __construct() {
        $this->model = new Ledger;
        $this->accountgroup_model = new Accountgroup;
    }

    public function view() {
        $ledger = $this->model->view();
        $view_file = "ledgers.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function ins() {
        if (isset($_POST["email"])) {
            $ins = $this->model->ins($_POST['account_name'], $_POST['group_id'], $_POST['contact_person'], $_POST['address'], $_POST['email'], $_POST['mobile1'], $_POST['mobile2'], $_POST['office_no']);

            if ($ins) {
                header("location:home.php?controller=ledger&action=ledgers");
            }
        }
        $view_accgroup = $this->accountgroup_model->view_accgroups();
        $view_file = "add_ledgermaster.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function get($ledger_id) {
        $get_ledger = $this->model->get($ledger_id);
        $view_file = "edit_ledgermaster.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function upd($ledger_id) {
        $get_ledger = $this->model->get($ledger_id);
        if (isset($_POST["email"])) {
            $upd = $this->model->upd($ledger_id,$_POST['account_name'], $_POST['group_id'], $_POST['contact_person'], $_POST['address'], $_POST['email'], $_POST['mobile1'], $_POST['mobile2'], $_POST['office_no']);
            if ($upd) {
                header("location:home.php?controller=ledger&action=ledgers");
            }
        }
        $view_accgroup = $this->accountgroup_model->view_accgroups();
        $view_file = 'edit_ledger.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
        if (isset($_POST["email"])) {
            $view_file = "ledgers.php";
            include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
        }
    }

    public function del($ledger_id) {
        $del = $this->model->del($ledger_id);
        if ($del) {
            header("location:home.php?controller=ledger&action=ledgers");
        }
        $ledger = $this->model->view();
        $view_file = "ledgers.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

}

?>
