<?php

class Insurance_co {

    public $conn;

    public function __construct() {
        $this->conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($this->conn, "ambica_logistics");
    }

    public function ins($company_name) {
        $ins = mysqli_query($this->conn, "insert into insurance_company(company_name)values('" . $company_name . "')");
        return $ins;
    }

    public function view() {
        $view=mysqli_query($this->conn,"select * from insurance_company order by id desc");
        return $view;
    }
    
    public function get($insco_id){
        $get=mysqli_query($this->conn,"select * from insurance_company where id='".$insco_id."'");
        return $get;
    }
    
    public function upd($insco_id,$company_name){
        $upd=mysqli_query($this->conn,"update insurance_company set company_name='" . $company_name . "' where id='".$insco_id."'");
        return $upd;
    }
    
    public function del($insco_id) {
        $del=mysqli_query($this->conn,"delete from insurance_company where id='".$insco_id."'");
        return $del;
    }

}

?>