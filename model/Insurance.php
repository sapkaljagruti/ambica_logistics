<?php

class Insurance {

    public $conn;

    public function __construct() {
        $this->conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($this->conn, "ambica_logistics");
    }

    public function ins($company_id) {
        $ins = mysqli_query($this->conn, "insert into insurance(company_id)values('" . $company_id . "')");
        return $ins;
    }

    public function view() {
        $view=mysqli_query($this->conn,"select * from insurance order by id desc");
        return $view;
    }
    
    public function get($ins_id) {
        $get = mysqli_query($this->conn, "SELECT * FROM insurance WHERE id='" . $ins_id . "'");
        return $get;
    }
    
    public function upd($ins_id,$company_id) {
        $up= mysqli_query($this->conn, "UPDATE insurance SET company_id='" . $company_id . "' WHERE id='" . $ins_id . "'");
        return $up;
    }
    
    public function del($ins_id) {
        $del=mysqli_query($this->conn,"delete from insurance where id='".$ins_id."'");
        return $del;
    }

}

?>