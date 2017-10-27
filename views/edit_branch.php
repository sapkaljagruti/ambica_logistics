



<!-- Main content -->
<section class="content">
    <div class="row">

        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-12">
            <!-- Horizontal Form -->

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Branches</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?php
                if (isset($branch)) {
                    while ($row = mysqli_fetch_assoc($branch)) {
                        $branch_name = $row['branch_name'];
                        $branch_code = $row['branch_code'];
                        $address = $row['address'];
                        $pincode = $row['pincode'];
                        $state = $row['state'];
                        $std_code = $row['std_code'];
                        $phone1 = $row['phone1'];
                        $phone2 = $row['phone2'];
                        $phone3 = $row['phone3'];
                        $fax = $row['fax'];
                        $mobile = $row['mobile'];
                        $manager = $row['manager'];
                        $email = $row['email'];
                        ?>
                        <form class="form-horizontal" action="" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputBranch Name3" class="col-sm-2 control-label">Branch Name</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputBranch Name3" name="branch_name" value=<?php echo $branch_name; ?>>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputBranch Code3" class="col-sm-2 control-label">Branch Code</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputBranch Code3" name="branch_code" value=<?php echo $branch_code; ?>>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress3" class="col-sm-2 control-label">Address</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputAddress3" name="address" value=<?php echo $address; ?>>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPin code3" class="col-sm-2 control-label">Pin code</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputPin code3" name="pincode" value=<?php echo $pincode; ?>>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputState3" class="col-sm-2 control-label">State</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputState3" name="state" value=<?php echo $state; ?>>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputSTD Code3" class="col-sm-2 control-label">STD Code</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputSTD Code3" name="std_code" value=<?php echo $std_code; ?>>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPhone13" class="col-sm-2 control-label">Phone1</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputPhone13" name="phone1" value=<?php echo $phone1; ?>>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPhone23" class="col-sm-2 control-label">Phone2</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputPhone23" name="phone2" value=<?php echo $phone2; ?>>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPhone33" class="col-sm-2 control-label">Phone3</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputPhone33" name="phone3" value=<?php echo $phone3; ?>>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputFax3" class="col-sm-2 control-label">Fax</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputFax3" name="fax" value=<?php echo $fax; ?>>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputMobile3" class="col-sm-2 control-label">Mobile</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputMobile3" name="mobile" value=<?php echo $mobile; ?>>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputManager3" class="col-sm-2 control-label">Manager</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputManager3" name="manager" value=<?php echo $manager; ?>>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputEmail3" name="email" value=<?php echo $email; ?>>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <!--                                    <button type="submit" class="btn btn-default">Cancel</button>-->
                                <button type="submit" class="btn btn-info pull-default" name="Upadte" value="Upadte">Upadte</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                        <?php
                    }
                }
                ?>
            </div>
            <!-- /.box-body -->

        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->
</section>
