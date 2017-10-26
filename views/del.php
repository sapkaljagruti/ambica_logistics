<?php
include_once 'controller/BranchMasterController.php';
$obj = new BranchMasterController();

if(isset($_GET['id']))
{
    $branch_id=$_GET['id'];
    $d=$obj->delete($branch_id);
    if($d)
    {
        header("location:views/view.php");
    }
}
?>