<?php

class Ledger {

    public $conn;

    public function __construct() {
        $this->conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($this->conn, "ambica_logistics");
    }

    public function ins($account_name, $group_id, $contact_person, $address, $email, $mobile1, $mobile2, $office_no) {
        $ins_query = mysqli_query($this->conn, "insert into ledger_master(account_name,group_id,contact_person,address,email,mobile1,mobile2,office_no)values('" . $account_name . "','" . $group_id . "','" . $contact_person . "','" . $address . "','" . $email . "','" . $mobile1 . "','" . $mobile2 . "','" . $office_no . "')");
        return $ins_query;
    }

    public function view() {
        $view_query = mysqli_query($this->conn, "select * from ledger_master order by id desc");
        return $view_query;
    }

    public function get($ledger_id) {
        $get_query = mysqli_query($this->conn, "select * from ledger_master where id='" . $ledger_id . "'");
        return $get_query;
    }

    public function upd($ledger_id, $account_name, $group_id, $contact_person, $address, $email, $mobile1, $mobile2, $office_no) {
        $upd_query = mysqli_query($this->conn, "update ledger_master set account_name='" . $account_name . "',group_id'" . $group_id . "',contact_person='" . $contact_person . "',address='" . $address . "',email='" . $email . "',mobile1='" . $mobile1 . "',mobile2='" . $mobile2 . "',office_no='" . $office_no . "' where id='" . $ledger_id . "'");
        return $upd_query;
    }

    public function del($ledger_id) {
        $del_query = mysqli_query($this->conn, "delete * from ledger_master where id='" . $ledger_id . "'");
        return $del_query;
    }

}

?>