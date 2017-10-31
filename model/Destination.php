<?php

class Destination {

    public $conn;

    public function __construct() {
        $this->conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($this->conn, "ambica_logistics");
    }

    public function insert_destination($station_name, $pin, $state, $std, $branch_id, $code) {
        $ins = mysqli_query($this->conn, "insert into destinations(station_name,pin,state,std,branch_id,code)values('" . $station_name . "','" . $pin . "','" . $state . "','" . $std . "','" . $branch_id . "','" . $code . "')");
        return $ins;
    }

    public function view_destination() {
        $view = mysqli_query($this->conn, "SELECT * from destinations ORDER BY id DESC");
        return $view;
    }

    public function get_destination($destination_id) {
        $get_query = mysqli_query($this->conn, "SELECT * from destinations WHERE id='" . $destination_id . "'");
        return $get_query;
    }

    public function upd_destination($destination_id, $station_name, $pin, $state, $std, $branch_id, $code) {
        $upd_query = mysqli_query($this->conn, "update destinations set station_name='" . $station_name . "',pin='" . $pin . "',state='" . $state . "',std='" . $std . "',branch_id='" . $branch_id . "',code='" . $code . "' where id='" . $destination_id . "'");
        return $upd_query;
    }
    
    public function del_destination($destination_id)
    {
        $del_query=mysqli_query($this->conn,"delete from destinations where id='".$destination_id."'");
        return $del_query;
    }

}

?>
