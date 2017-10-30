<?php

class Godown {

    public $conn;

    public function __construct() {
        $this->conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($this->conn, "ambica_logistics");

//        $table = mysqli_query($this->conn, "CREATE TABLE godown("
//                . "godown_id INT(11)NOT NUL AUTO_INCREMENT,"
//                . "godown_name VARCHAR(255)NOT NULL,"
//                . "code VARCHAR(30)NOT NULL,"
//                . "under_branch VARCHAR(30)NOT NULL,"
//                . "address VARCHAR(255)NOT NULL,"
//                . "phone_no VARCHAR(15)NOT NULL,"
//                . "email_id VARCHAR(255)NOT NULL,"
//                . "PRIMARY KEY(godown_id)"
//                . "FOREIGN KEY(branch_id) REFERENCES(branch_masters))");
//
//        return $table;
    }
    
    public function insert($godown_name,$code,$branch_id,$address,$phone_no,$email_id) {
        $in = mysqli_query($this->conn, "insert into godowns(godown_name,code,branch_id,address,phone_no,email_id)values('" . $godown_name."', '". $code . "', '" . $branch_id . "','" . $address . "','" . $phone_no . "','" . $email_id . "')");
        return $in;
    }
    
    public function view_godown() {
        $get = mysqli_query($this->conn, "SELECT * FROM godowns ORDER BY id DESC");
        return $get;
    }
    
    public function get_godown($godown_id) {
        $get = mysqli_query($this->conn, "SELECT * FROM godowns where id='".$godown_id."'");
        return $get;
    }
    
    public function upd_godown($godown_id,$godown_name,$code,$branch_id,$address,$phone_no,$email_id){
        $upd=  mysqli_query($this->conn,"update godowns set godown_name='" . $godown_name."',code='". $code . "',branch_id='" . $branch_id . "',address='" . $address . "',phone_no='" . $phone_no . "',email_id='" . $email_id . "' where id='".$godown_id."'");
        return $upd;
        
    }
    
    public function del_godown($godown_id) {
        $del = mysqli_query($this->conn, "delete from godowns WHERE id='" . $godown_id . "'");
        return $del;
    }

}

?>
