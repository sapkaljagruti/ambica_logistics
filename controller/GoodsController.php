<?php

include_once 'model/Goods.php';

class GoodsController {

    public $model;

    public function __construct() {
        $this->model = new Goods;
    }

    public function view_goods() {
        $goods = $this->model->view();
        $view_file = "goods_description.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function insert() {
        if (isset($_POST["code"])) {
            $ins = $this->model->ins($_POST["goods_content"], $_POST["code"]);
            if ($ins) {
                header("location:home.php?controller=goods&action=goods_description");
            }
        }
        $goods = $this->model->view();
        $view_file = "add_goods.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function get($goods_id) {
        $goods = $this->model->get($goods_id);
        $view_file = "edit_goodsdescription.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

    public function upd($goods_id) {
        $goods = $this->model->get($goods_id);
        if (isset($_POST['code'])) {
            $upd = $this->model->upd($goods_id,$_POST["goods_content"], $_POST["code"]);
            if ($upd) {
                header("location:home.php?controller=goods&action=goods_description");
            }
        }
        $view_file = "edit_goodsdescription.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';

        if (isset($_POST['code'])) {
            $view_file = "goods_description.php";
            include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
        }
    }

    public function del($goods_id) {
        $del = $this->model->del($goods_id);
        if ($del) {
            header("location:home.php?controller=goods&action=goods_description");
        }
        $goods = $this->model->view();
        $view_file = "goods_description.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
    }

}

?>
