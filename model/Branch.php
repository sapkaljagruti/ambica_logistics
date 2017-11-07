<?php

@session_start();

class Branch {

    public $conn;

    public function __construct() {
        $this->conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($this->conn, "ambica_logistics");
    }

    public function insert($branch_name, $branch_code, $address, $pincode, $state, $phone1, $fax, $mobile, $mobile2, $manager_id, $email) {
        $in = mysqli_query($this->conn, "insert into branch_masters(branch_name,branch_code,address,pincode,state,phone1,fax,mobile, mobile2, manager_id,email)values('" . $branch_name . "', '" . $branch_code . "', '" . $address . "','" . $pincode . "','" . $state . "','" . $phone1 . "','" . $fax . "','" . $mobile . "','" . $mobile2 . "','" . $manager_id . "','" . $email . "')");
        return $in;
    }

    public function get_branches() {
        $get = mysqli_query($this->conn, "SELECT * FROM branch_masters ORDER BY id DESC");
        return $get;
    }

    public function get_branch($branch_id) {
        $get = mysqli_query($this->conn, "SELECT * FROM branch_masters WHERE id='" . $branch_id . "'");
        return $get;
    }

    public function upd_branch($branch_id, $branch_name, $branch_code, $address, $pincode, $state, $phone1, $fax, $mobile, $mobile2, $manager_id, $email) {
        $up_query = mysqli_query($this->conn, "UPDATE branch_masters SET branch_name='" . $branch_name . "',branch_code='" . $branch_code . "',address='" . $address . "',pincode='" . $pincode . "',state='" . $state . "',phone1='" . $phone1 . "',fax='" . $fax . "',mobile='" . $mobile . "',mobile2='" . $mobile2 . "',manager_id='" . $manager_id . "',email='" . $email . "' WHERE id='" . $branch_id . "'");
        return $up_query;
    }

    public function del_branch($branch_id) {
        $del = mysqli_query($this->conn, "DELETE from branch_masters WHERE id='" . $branch_id . "'");
        return $del;
    }

}

?>
