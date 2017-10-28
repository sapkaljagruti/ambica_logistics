<?php
//@session_start();
//if (!isset($_SESSION['username'])) {
//    header("location:index.php");
//}
?>
<!-- Content Header (Page header) -->

<!-- Main content -->
<section class="content">
    <div class="row">

        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-12">
            <!-- Horizontal Form -->

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Branches</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputBranch Name3" class="col-sm-2 control-label">Branch Name</label>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputBranch Name3" name="branch_name">
                            </div>

                            <label for="inputBranch Code3" class="col-sm-2 control-label">Code</label>

                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="inputBranch Code3" name="branch_code">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputAddress3" class="col-sm-2 control-label">Address</label>

                            <div class="col-sm-8">
                                <textarea rows="2" cols="50" class="form-control" id="inputAddress3" name="address">Address</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPin code3" class="col-sm-2 control-label">Pin code</label>

                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="inputPin code3" name="pincode">
                            </div>

                            <label for="inputState3" class="col-sm-2 control-label">State</label>

                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="inputState3" name="state">
                            </div>

                            <label for="inputSTD Code3" class="col-sm-2 control-label">STD Code</label>

                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="inputSTD Code3" name="std_code">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPhone3" class="col-sm-2 control-label">Phone</label>

                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="inputPhone3" name="phone1">
                            </div>

                            <label for="inputPhone3" class="col-sm-2 control-label">Phone</label>

                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="inputPhone3" name="phone2">
                            </div>

                            <label for="inputPhone3" class="col-sm-2 control-label">Phone</label>

                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="inputPhone3" name="phone3">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputFax3" class="col-sm-2 control-label">Fax</label>

                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="inputFax3" name="fax">
                            </div>

                            <label for="inputMobile3" class="col-sm-2 control-label">Mobile</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="inputMobile3" name="mobile">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputManager3" class="col-sm-2 control-label">Manager</label>

                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="inputManager3" name="manager">
                            </div>

                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="inputEmail3" name="email">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <div class="col-sm-10 pull-right">
                            <button type="submit" class="btn btn-info pull-default" name="Save" value="Save">Save</button>
                            <button type="submit" class="btn btn-default">Cancel</button>
                        </div>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box-body -->

        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
