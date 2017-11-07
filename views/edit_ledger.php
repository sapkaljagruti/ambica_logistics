
<!-- Main content -->
<section class="content">
    <div class="row">

        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-12">
            <!-- Horizontal Form -->

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit ledgers</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?php
                if (isset($get_ledger)) {
                    while ($row = mysqli_fetch_assoc($get_ledger)) {
                        $account_name = $row['account_name'];
                        $group_id = $row['group_id'];
                        $contact_person = $row['contact_person'];
                        $address = $row['address'];
                        $email = $row['email'];
                        $mobile1 = $row['mobile1'];
                        $mobile2 = $row['mobile2'];
                        $office_no = $row['office_no'];
                        ?>
                        <form class="form-horizontal" action="" method="post">
                            <div class="box-body">
                                <div class="form-group">
                            <label for="inputAccount Name3" class="col-sm-2 control-label">Account Name</label>

                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="inputAccount Name3" name="account_name" value="<?php echo $account_name; ?>">
                            </div>

                            <label for="inputAccount Group3" class="col-sm-2 control-label">Account Group</label>

                            <div class="col-sm-3">
                                <select class="form-control" id="inputAccount Group3" name="group_id" value="<?php echo $group_id; ?>">
                                    <option value = "">Select Group</option>
                                     <?php
                                            while ($row = mysqli_fetch_assoc($view_accgroup)) {
                                                if ($ledger_id == $row['id']) {
                                                    $ledger_selected = ' selected="selected"';
                                                } else {
                                                    $ledger_selected = "";
                                                }
                                                echo "<option value='" . $row['id'] . "'" . $ledger_selected . ">" . $row['name'] . "</option>";
                                            }
                                            ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputContact Person3" class="col-sm-2 control-label">Contact Person</label>

                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="inputContact Person3" name="contact_person" value="<?php echo $contact_person; ?>">
                            </div>

                            <label for="inputAddress3" class="col-sm-2 control-label">Address</label>

                            <div class="col-sm-2">
                                <textarea rows="1" cols="30" class="form-control" id="inputAddress3" name="address" placeholder="Address"><?php echo $address; ?></textarea>
                            </div>

                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-2">
                                <input type="email" class="form-control" id="inputEmail3" name="email" value="<?php echo $email; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputMobile3" class="col-sm-2 control-label">Mobile</label>

                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="inputMobile3" name="mobile1" required="required" value="<?php echo $mobile1; ?>">
                            </div>

                            <label for="inputMobile3" class="col-sm-2 control-label">Mobile</label>

                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="inputMobile3" name="mobile2" value="<?php echo $mobile2; ?>">
                            </div>

                            <label for="inputOffice No3" class="col-sm-2 control-label">Office No</label>

                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="inputOffice No3" name="office_no" value="<?php echo $office_no; ?>">
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
