<?php

class Courier {

    public $conn;

    public function __construct() {
        $this->conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($this->conn, "ambica_logistics");
    }

    public function ins($company_name) {
        $ins = mysqli_query($this->conn, "insert into courier_master(company_name)values('" . $company_name . "')");
        return $ins;
    }

    public function view() {
        $view = mysqli_query($this->conn, "select * from courier_master order by id desc");
        return $view;
    }

    public function get($cour_id) {
        $get = mysqli_query($this->conn, "SELECT * FROM courier_master WHERE id='" . $cour_id . "'");
        return $get;
    }

    public function upd($cour_id, $company_name) {
        $up = mysqli_query($this->conn, "UPDATE courier_master SET company_name='" . $company_name . "' WHERE id='" . $cour_id . "'");
        return $up;
    }

    public function del($cour_id) {
        $del = mysqli_query($this->conn, "delete from courier_master where id='" . $cour_id . "'");
        return $del;
    }

}

?>