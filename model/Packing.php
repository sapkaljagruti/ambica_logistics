<?php

class Packing {

    public $conn;

    public function __construct() {
        $this->conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($this->conn, "ambica_logistics");
    }

    public function ins_packing($packing_type) {
        $ins_query = mysqli_query($this->conn, "insert into packings(packing_type)values('" . $packing_type . "')");
        return $ins_query;
    }

    public function view_packing() {
        $view_query = mysqli_query($this->conn, "select * from packings order by id desc");
        return $view_query;
    }

    public function get_packing($packing_id) {
        $get_query=mysqli_query($this->conn,"select * from packings where id='".$packing_id."'");
        return $get_query;
    }
    
    public function upd_packing($packing_id,$packing_type)
    {
        $upd_query=mysqli_query($this->conn,"update packings set packing_type='" . $packing_type . "' where id='".$packing_id."'");
        return $upd_query;
    }
    
    public function del_packing($packing_id){
        $del_query=mysqli_query($this->conn,"delete from packings where id='".$packing_id."'");
        return $del_query;
    }

}

?>