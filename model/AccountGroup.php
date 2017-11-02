<?php

class Accountgroup {

    public $conn;

    public function __construct() {
        $this->conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($this->conn, "ambica_logistics");
    }
    
    public function insert_accgroups($parent_id,$name)
    {
        $ins=mysqli_query($this->conn,"insert into account_groups(parent_id,name)values('".$parent_id."','".$name."')");
        return $ins;
    }
    
    public function view_accgroups(){
        $view=mysqli_query($this->conn,"SELECT * FROM account_groups ORDER BY id DESC");
        return $view;
    }
    
    public function get_accgroups($accgroups_id){
        $get=mysqli_query($this->conn,"select * from account_groups where id='".$accgroups_id."'");
        return $get;
    }
    
    public function upd_accgroups($accgroups_id,$name,$parent_id)
    {
        $upd=  mysqli_query($this->conn,"update account_groups set name='".$name."',parent_id='".$parent_id."' where id='".$accgroups_id."'");
        return $upd;
    }
    
    public function del_accgroups($accgroups_id)
    {
        $del=mysqli_query($this->conn,"delete from account_groups where id='".$accgroups_id."'");
        return $del;
    }

}
