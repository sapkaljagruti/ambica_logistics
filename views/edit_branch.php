
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
                        $phone1 = $row['phone1'];
                        $fax = $row['fax'];
                        $mobile = $row['mobile'];
                        $mobile2 = $row['mobile2'];
                        $manager_id = $row['manager_id'];
                        $email = $row['email'];
                        ?>
                        <form class="form-horizontal" action="" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputBranch Name3" class="col-sm-2 control-label">Branch Name</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="inputBranch Name3" name="branch_name" required="required" value="<?php echo $branch_name; ?>">
                                    </div>

                                    <label for="inputCode3" class="col-sm-2 control-label">Code</label>

                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="inputCode3" name="branch_code" required="required" value="<?php echo $branch_code; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress3" class="col-sm-2 control-label">Address</label>

                                    <div class="col-sm-2">
                                        <textarea rows="2" cols="30" class="form-control" id="inputAddress3" name="address" placeholder="Enter Address"><?php echo $address; ?></textarea>
                                    </div>
                                    
                                    <label for="inputState3" class="col-sm-2 control-label">State</label>

                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="inputState3" name="state" value="<?php echo $state; ?>">
                                    </div>
                                    
                                    <label for="inputPin code3" class="col-sm-2 control-label">Pin code</label>

                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="inputPin code3" name="pincode" value="<?php echo $pincode; ?>">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="inputMobile3" class="col-sm-2 control-label">Mobile</label>

                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="inputMobile3" name="mobile" value="<?php echo $mobile; ?>">
                                    </div>
                                    
                                    <label for="inputMobile3" class="col-sm-2 control-label">Mobile</label>

                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="inputMobile3" name="mobile2" value="<?php echo $mobile2; ?>">
                                    </div>
                                    
                                    <label for="inputPhone3" class="col-sm-2 control-label">Phone</label>

                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="inputPhone3" name="phone1" required="required" value="<?php echo $phone1; ?>">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="inputFax3" class="col-sm-2 control-label">Fax</label>

                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="inputFax3" name="fax" value="<?php echo $fax; ?>">
                                    </div>

                                    <label for="inputManager3" class="col-sm-2 control-label">Manager</label>

                                    <div class="col-sm-2">
                                        <select class="form-control" id="inputManager3" name="manager_id" required="required" value="<?php echo $manager_id; ?>">
                                            <option value = "">Select Manager</option>
                                            <?php
                                            while ($row = mysqli_fetch_assoc($view_manager)) {
                                                if ($manager_id == $row['id']) {
                                                    $manager_selected = ' selected="selected"';
                                                } else {
                                                    $manager_selected = "";
                                                }
                                                echo "<option value='" . $row['id'] . "'" . $manager_selected . ">" . $row['name'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                                    <div class="col-sm-2">
                                        <input type="email" class="form-control" id="inputEmail3" name="email" value="<?php echo $email; ?>">
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <!--                                    <button type="submit" class="btn btn-default">Cancel</button>-->
                                <button type="submit" class="btn btn-info pull-default" name="Upadte" value="Upadte">Upadte</button>
                                <button type="submit" class="btn btn-default">Cancel</button>
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
