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
                    <h3 class="box-title">Add Ledgers</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputAccount Name3" class="col-sm-2 control-label">Account Name</label>

                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="inputAccount Name3" name="account_name" required="required" placeholder="Name">
                            </div>

                            <label for="inputAccount Group3" class="col-sm-2 control-label">Account Group</label>

                            <div class="col-sm-3">
                                <select class="form-control" id="inputAccount Group3" name="group_id" >
                                    <option value = "">Select Group</option>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($view_accgroup)) {
                                            echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputContact Person3" class="col-sm-2 control-label">Contact Person</label>

                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="inputContact Person3" name="contact_person" placeholder="Contact Person">
                            </div>

                            <label for="inputAddress3" class="col-sm-2 control-label">Address</label>

                            <div class="col-sm-2">
                                <textarea rows="1" cols="30" class="form-control" id="inputAddress3" name="address" placeholder="Address"></textarea>
                            </div>

                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-2">
                                <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputMobile3" class="col-sm-2 control-label">Mobile</label>

                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="inputMobile3" name="mobile1" required="required" placeholder="Mobile">
                            </div>

                            <label for="inputMobile3" class="col-sm-2 control-label">Mobile</label>

                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="inputMobile3" name="mobile2" placeholder="Mobile">
                            </div>

                            <label for="inputOffice No3" class="col-sm-2 control-label">Office No</label>

                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="inputOffice No3" name="office_no" placeholder="Office No">
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
