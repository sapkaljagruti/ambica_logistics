<?php

include_once 'model/Ledger.php';
include_once 'model/Accountgroup.php';

class LedgerController {

    public $model;

    public function __construct() {
        $this->model = new Ledger;
        $this->
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
        $view_file = "add_ledgermaster.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

}

?>
