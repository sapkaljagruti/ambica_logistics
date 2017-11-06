<!-- Main content -->
<section class="content">
    <div class="row">

        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-12">
            <!-- Horizontal Form -->

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Manager</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?php
                if (isset($get)) {
                    while ($row = mysqli_fetch_assoc($get)) {

                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile1 = $row['mobile1'];
                        $mobile2 = $row['mobile2'];
                        ?>
                        <form class="form-horizontal" action="" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputName3" class="col-sm-2 control-label">Name</label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputName3" name="name" required="required" value="<?php echo $name; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputEmail3" name="email" required="required" value="<?php echo $email; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputMobile3" class="col-sm-2 control-label">Mobile</label>

                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="inputMobile3" name="mobile1" required="required" value="<?php echo $mobile1; ?>">
                            </div>

                            <label for="inputMobile3" class="col-sm-2 control-label">Mobile</label>

                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="inputMobile3" name="mobile2" value="<?php echo $mobile2; ?>">
                            </div>
                        </div>

                    </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-info pull-default" name="Update" value="Update">Update</button>
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
