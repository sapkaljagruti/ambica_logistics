<?php

class Goods {

    public $conn;

    public function __construct() {
        $this->conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($this->conn, "ambica_logistics");
    }

    public function ins($goods_content, $code) {
        $ins_query = mysqli_query($this->conn, "insert into goods(goods_content,code)values('" . $goods_content . "','" . $code . "')");
        return $ins_query;
    }

    public function view() {
        $view_query = mysqli_query($this->conn, "select * from goods order by id desc");
        return $view_query;
    }

    public function get($goods_id) {
        $get_query = mysqli_query($this->conn, "select * from goods where id='" . $goods_id . "'");
        return $get_query;
    }
    
    public function upd($goods_id,$goods_content, $code)
    {
        $upd_query=mysqli_query($this->conn,"update goods set goods_content='" . $goods_content . "' ,code='".$code."' where id='".$goods_id."'");
        return $upd_query;
    }
    
    public function del($goods_id){
        $del_query=mysqli_query($this->conn,"delete from goods where id='" . $goods_id . "'");
        return $del_query;
    }
}

?>