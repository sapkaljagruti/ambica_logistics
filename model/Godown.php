<?php

class Godown {

    public $conn;

    public function Godown() {
        $this->conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($this->conn, "travels");

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

}

?>
