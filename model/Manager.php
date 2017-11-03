<?php

class Manager {

    public $conn;

    public function __construct() {
        $this->conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($this->conn, "ambica_logistics");
    }

    public function ins_manager($name, $email, $mobile1, $mobile2) {
        $ins_query = mysqli_query($this->conn, "insert into managers(name,email,mobile1,mobile2)values('" . $name . "','" . $email . "','" . $mobile1 . "','" . $mobile2 . "')");
        return $ins_query;
    }

    public function view_manager() {
        $view_query = mysqli_query($this->conn, "select * from managers order by id desc");
        return $view_query;
    }

    public function get_manager($manager_id) {
        $get_query = mysqli_query($this->conn, "select * from managers where id='" . $manager_id . "'");
        return $get_query;
    }

    public function upd_manager($manager_id,$name, $email, $mobile1, $mobile2) {
        $upd_query=mysqli_query($this->conn,"update managers set name='".$name."',email='".$email."',mobile1='".$mobile1."',mobile2='".$mobile2."' where id='" . $manager_id . "'");
        return $upd_query;
    }
    
    public function del_manager($manager_id){
        $del_query=mysqli_query($this->conn,"delete from managers where id='" . $manager_id . "'");
        return $del_query; 
    }
}

?>
