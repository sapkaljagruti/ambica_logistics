<?php

include_once 'model/Destination.php';
include_once 'model/Branch.php';

class DestinationController {

    public $model;

    public function __construct() {
        $this->model = new Destination;
        $this->branch_model = new Branch;
    }

    public function destinations() {
        $destination = $this->model->view_destination();
        $view_file = "Destinations.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function add_destination() {
        if (isset($_POST['code'])) {
            $ins = $this->model->insert_destination($_POST['station_name'], $_POST['pin'], $_POST['state'], $_POST['std'], $_POST['branch_id'], $_POST['code']);

            if ($ins) {
                header("location:home.php?controller=destination&action=destinations");
            }
        }
        $branches = $this->branch_model->get_branches();
        $view_file = 'add_destination.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function get_destination($destination_id) {
        $branches = $this->branch_model->get_branches();
        $destination = $this->model->get_destination($destination_id);
        $view_file = "edit_destination.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function update($destination_id) {
        $destination = $this->model->get_destination($destination_id);
        if (isset($_POST['code'])) {
            $upd = $this->model->upd_destination($destination_id, $_POST['station_name'], $_POST['pin'], $_POST['state'], $_POST['std'], $_POST['branch_id'], $_POST['code']);

            if ($upd) {
                header("location:home.php?controller=destination&action=destinations");
            }
        }
        $branches = $this->branch_model->get_branches();
        $view_file = 'edit_destination.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
        if (isset($_POST['code'])) {
            $view_file = 'Destinations.php';
            include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
        }
    }

    public function del($destination_id) {
        $del = $this->model->del_destination($destination_id);
        if ($del) {
            header("location:home.php?controller=destination&action=destinations");
        }
        $destination = $this->model->view_destination();
        $view_file = "Destinations.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

}

?>
