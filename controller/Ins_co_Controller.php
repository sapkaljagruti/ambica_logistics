<?php
    class Ins_co_Controller{
        public $model;
        
        public function __construct() {
            $this->model=new Insurance_co;
        }
        
        public function view()
        {
            $view=$this->model->view();
            $view_file="";
            include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
        }
        
        public function ins()
        {
            if(isset($_POST["company_name"]))
            {
                $ins=  $this->model->ins($_POST["company_name"]);
                
                if($ins){
                    header("location:home.php?controller=ins_co&action=ins_comp");
                }
            }
            $view=$this->model->view();
            $view_file="add_inscompany.php";
            include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/layout.php';
            
        }
    }
?>